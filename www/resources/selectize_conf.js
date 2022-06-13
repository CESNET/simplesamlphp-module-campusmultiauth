$(function () {
    for (var i = 0; i < indexes.length; i++) {
        $("#searchbox-" + indexes[i]).selectize({
            valueField: "idpentityid",
            labelField: "text",
            options: [],
            create: false,
            maxItems: 1,
            myIndex: indexes[i],
            loadThrottle: 250,
            placeholder: placeholderTexts[i],
            render: {
                option: function (item, escape) {
                    item.text = escape(item.text);
                    item.image = escape(item.image);

                    if (framework === 'muni_jvs') {
                        return (
                            '<div class="box-vcards-list__item box-vcard--compact searchbox-result side-padding-zero">' +
                            '<div class="box-vcards-list__inner side-padding-zero">' +
                            '<p class="box-vcards-list__img center">' +
                            '<img src="' + item.image + '" class="img-searchbox" alt=""/>' +
                            '</p>' +
                            '<div class="box-vcards-list__content u-pb-0 u-pt-0 u-pr-0 u-pl-10">' +
                            item.text +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        );
                    } else {
                        return (
                            '<div class="list-group-item list-group-item-action d-flex align-items-center">' +
                            '<p class="mb-0">' +
                            '<img src="' + item.image + '" class="img-searchbox" alt=""/>' +
                            '</p>' +
                            '<div class="margin-left-24">' +
                            item.text +
                            '</div>' +
                            '</div>'
                        );
                    }
                },
            },

            onChange: function (value) {
                $(this['$input']).closest('form').trigger('submit');
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
                    url: baseUrl + "module.php/campusMultiauth/idpSearch.php",
                    type: "GET",
                    dataType: "json",
                    data: {
                        q: query,
                        index: this.settings.myIndex,
                        language: language,
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
        });
    }
});
