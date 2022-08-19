<?php

declare(strict_types=1);

use SimpleSAML\Configuration;
use SimpleSAML\Metadata\MetaDataStorageHandler;
use SimpleSAML\Module\campusmultiauth\Auth\Source\Campusidp;

header('Content-type: application/json');

$language = $_GET['language'] ?? 'en';

$metadataStorageHandler = MetaDataStorageHandler::getMetadataHandler();
$metadata = $metadataStorageHandler->getList();

if (!empty($_GET['idphint']) && !isset($_GET['index'])) {
    $filteredData = array_intersect_key($metadata, array_flip(json_decode($_GET['idphint'])));
} else {
    $index = $_GET['index'];
    $searchTerm = $_GET['q'] ?? '';
    $skipMatching = $_GET['skipMatching'] ?? false;


    $config = Configuration::getConfig('module_campusmultiauth.php')->toArray();
    $searchBox = $config['components'][$index];

    if (!empty($_GET['idphint'])) {
        $idphint = $_GET['idphint'];
        if (!is_array($idphint)) {
            $idphint = json_decode($idphint);
        }

        $metadata = array_intersect_key($metadata, array_flip($idphint));
    }

    if (
        !empty($searchBox['include']['upstream_idps']) ||
        !empty($searchBox['include']['tags']) ||
        !empty($searchBox['include']['registration_authorities'])
    ) {
        $filteredMetadata = [];

        foreach ($metadata as $entityid => $idpentry) {
            if (!empty($searchBox['include']['tags'])) {
                foreach ($searchBox['include']['tags'] as $tag) {
                    if (!empty($idpentry['tag']) && $tag === $idpentry['tag']) {
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
                if (!empty($idpentry['tag']) && $tag === $idpentry['tag']) {
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

    if ($skipMatching) {
        $filteredData = $metadata;
    } else {
        $filteredData = Campusidp::getIdpsMatchedBySearchTerm($metadata, $searchTerm);
    }
}

$data['items'] = [];

foreach ($filteredData as $entityid => $idpentry) {
    $item['idpentityid'] = $entityid;
    $item['image'] = $searchBox['logos'][$entityid] ?? Campusidp::getMostSquareLikeImg($idpentry);

    if (!empty($idpentry['name'][$language])) {
        $item['text'] = $idpentry['name'][$language];
    } elseif (!empty($idpentry['name']['en'])) {
        $item['text'] = $idpentry['name']['en'];
    } elseif (reset($idpentry['name'])) {
        $item['text'] = reset($idpentry['name']);
    } else {
        $item['text'] = 'undefined';
    }

    $data['items'][] = $item;
}

echo json_encode($data);
