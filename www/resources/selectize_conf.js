$(function () {
    $("#searchbox").selectize({
        valueField: "idpentityid",
        labelField: "text",
        options: [],
        create: false,
        loadThrottle: 250,
        placeholder: placeholderText,
        render: {
            option: function (item) {
                let text;

                if (typeof item.text[language] !== 'undefined') {
                    text = item.text[language];
                } else {
                    text = item.text['en'];
                }

                if (framework === 'muni_jvs') {
                    return (
                        '<div class="box-vcards-list__item box-vcard--compact searchbox-result side-padding-zero">' +
                            '<div class="box-vcards-list__inner side-padding-zero">' +
                                '<p class="box-vcards-list__img center">' +
                                    '<img src="' + item.image + '" style="height: 50px; width: 50px; object-fit: cover; object-position: left" alt=""/>' +
                                '</p>' +
                                '<div class="box-vcards-list__content u-pb-0 u-pt-0 u-pr-0 u-pl-10">' +
                                    text +
                                '</div>' +
                            '</div>' +
                        '</div>'
                    );
                } else {
                    return (
                        '<div class="list-group-item list-group-item-action d-flex align-items-center">' +
                            '<p style="margin-bottom: 0">' +
                                '<img src="' + item.image + '" style="height: 50px; width: 50px; object-fit: cover; object-position: left" alt=""/>' +
                            '</p>' +
                            '<div style="margin-left: 24px">' +
                                text +
                            '</div>' +
                        '</div>'
                    );
                }
            },
        },

        onItemAdd: function (value, $item) {
            let data = this.options[value];

            $('#idpentityid-searchbox').val(data.idpentityid);
            $('#institution-img').val(data.image);
            $('#institution-name').val(JSON.stringify(data.text));

            $('#idps-form').submit();
        },

        score: function () {
            return function () {
                return 1;
            };
        },

        load: function (query, callback) {
            if (!query.length) {
                return callback();
            }
            this.clearCache('option');
            this.clearOptions();
            this.refreshOptions(true);
            $.ajax({
                url: "https://ip-147-251-124-162.flt.cloud.muni.cz/campus-idp/module.php/campusMultiauth/idpSearch.php",
                type: "GET",
                dataType: "json",
                data: {
                    q: query,
                    index: componentIndex,
                    page_limit: 10,
                },
                error: function () {
                    callback();
                },
                success: function (res) {
                    callback(res.items);
                },
            });
        },
    })
});
