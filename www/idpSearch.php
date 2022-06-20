<?php

use SimpleSAML\Configuration;
use SimpleSAML\Logger;
use SimpleSAML\Metadata\MetaDataStorageHandler;
use SimpleSAML\Module\campusMultiauth\Auth\Source\Campusidp;

header('Content-type: application/json');

$index = $_GET['index'];

$config = $wayfConfig = Configuration::getConfig('wayf.php')->toArray();
$searchBox = $config['components'][$index];

$metadataStorageHandler = MetaDataStorageHandler::getMetadataHandler();
$metadata = $metadataStorageHandler->getList();

$searchTerm = $_GET['q'];
$transliterator = Transliterator::createFromRules(
    ':: Any-Latin; :: Latin-ASCII; :: NFD; :: [:Nonspacing Mark:] Remove; :: Lower(); :: NFC;',
    Transliterator::FORWARD
);

if (
    !empty($searchBox['include']['upstream_idps']) ||
    !empty($searchBox['include']['tags']) ||
    !empty($searchBox['include']['registration_authorities'])
) {
    $filteredMetadata = [];

    foreach ($metadata as $entityid => $idpentry) {
        if (!empty($searchBox['include']['tags'])) {
            foreach ($searchBox['include']['tags'] as $tag) {
                if ($tag === $idpentry['tag']) {
                    $filteredMetadata[$entityid] = $idpentry;
                    break;
                }
            }
        }

        if (!empty($searchBox['include']['registration_authorities']) && empty($filteredMetadata[$entityid])) {
            foreach ($searchBox['include']['registration_authorities'] as $registrationAuthority) {
                if (!empty($idpentry['RegistrationInfo']['registrationAuthority']) && $idpentry['RegistrationInfo']['registrationAuthority'] === $registrationAuthority) {
                    $filteredMetadata[$entityid] = $idpentry;
                    break;
                }
            }
        }

        if (!empty($searchBox['include']['upstream_idps']) && empty($filteredMetadata[$entityid])) {
            foreach ($searchBox['include']['upstream_idps'] as $upstreamIdp) {
                if ($upstreamIdp === $entityid) {
                    $filteredMetadata[$entityid] = $idpentry;
                    break;
                }
            }
        }
    }

    $metadata = $filteredMetadata;
}

foreach ($metadata as $entityid => $idpentry) {
    if (!empty($searchBox['exclude']['tags'])) {
        foreach ($searchBox['exclude']['tags'] as $tag) {
            if ($tag === $idpentry['tag']) {
                unset($metadata[$entityid]);
                break;
            }
        }
    }

    if (!empty($searchBox['exclude']['registration_authorities']) && !empty($metadata[$entityid])) {
        foreach ($searchBox['exclude']['registration_authorities'] as $registrationAuthority) {
            if ($registrationAuthority === $idpentry['RegistrationInfo']['registrationAuthority']) {
                unset($metadata[$entityid]);
                break;
            }
        }
    }

    if (!empty($searchBox['exclude']['upstream_idps']) && !empty($metadata[$entityid])) {
        foreach ($searchBox['exclude']['upstream_idps'] as $upstreamIdp) {
            if ($upstreamIdp === $entityid) {
                unset($metadata[$entityid]);
                break;
            }
        }
    }
}

$filteredData = [];

foreach ($metadata as $entityid => $idpentry) {
    if (!empty($idpentry['name']) && is_array($idpentry['name'])) {
        foreach ($idpentry['name'] as $key => $value) {
            if (str_contains($transliterator->transliterate($value), $transliterator->transliterate($searchTerm))) {
                $filteredData[$entityid] = $idpentry;
                break;
            }
        }
    }

    if (!in_array($idpentry, $filteredData) && !empty($idpentry['description']) && is_array($idpentry['description'])) {
        foreach ($idpentry['description'] as $key => $value) {
            if (str_contains($transliterator->transliterate($value), $transliterator->transliterate($searchTerm))) {
                $filteredData[$entityid] = $idpentry;
                break;
            }
        }
    }

    if (!in_array($idpentry, $filteredData) && !empty($idpentry['url']) && is_array($idpentry['url'])) {
        foreach ($idpentry['url'] as $key => $value) {
            if (str_contains(strtolower($value), strtolower($searchTerm))) {
                $filteredData[$entityid] = $idpentry;
                break;
            }
        }
    }
}

$data['items'] = [];

foreach ($filteredData as $entityid => $idpentry) {
    $item['idpentityid'] = $entityid;
    $item['image'] = Campusidp::getMostSquareLikeImg($idpentry);

    if (!empty($idpentry['name'][$_GET['language']])) {
        $item['text'] = $idpentry['name'][$_GET['language']];
    } elseif (!empty($item['text'] = $idpentry['name']['en'])) {
        $item['text'] = $idpentry['name']['en'];
    } elseif (reset($idpentry['name'])) {
        $item['text'] = reset($idpentry['name']);
    } else {
        $item['text'] = 'undefined';
    }

    $data['items'][] = $item;
}

echo json_encode($data);
