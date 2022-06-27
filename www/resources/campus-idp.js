function hideElement(element) {
    element.classList.add('vhide', 'd-none');
}

function showElement(element) {
    element.classList.remove('vhide', 'd-none');
}

function showMoreOptions() {
    document.querySelectorAll('.idp-hidden').forEach(showElement);
    hideElement(document.getElementById('more-options'));
}

function selectizeScore() {
    return function () {
        return 1;
    };
}

function selectizeRenderOption(item, escape) {
    var escapedText = escape(item.text);
    var escapedImage = escape(item.image);

    var is_muni_framework = document.body.classList.contains("framework_muni");

    if (is_muni_framework) {
        return (
            '<div class="box-vcards-list__item box-vcard--compact searchbox-result side-padding-zero">' +
            '<div class="box-vcards-list__inner side-padding-zero">' +
            '<p class="box-vcards-list__img center">' +
            '<img src="' + escapedImage + '" class="img-searchbox" alt=""/>' +
            '</p>' +
            '<div class="box-vcards-list__content u-pb-0 u-pt-0 u-pr-0 u-pl-10">' +
            escapedText +
            '</div>' +
            '</div>' +
            '</div>'
        );
    } else {
        return (
            '<div class="list-group-item list-group-item-action d-flex align-items-center">' +
            '<p class="mb-0">' +
            '<img src="' + escapedImage + '" class="img-searchbox" alt=""/>' +
            '</p>' +
            '<div class="margin-left-24">' +
            escapedText +
            '</div>' +
            '</div>'
        );
    }
}

function selectizeOnChange(value) {
    $(this['$input']).closest('form').trigger('submit');
}

function selectizeLoad(query, callback) {
    if (!query.length) {
        return callback();
    }

    this.clearCache('option');
    this.clearOptions();
    this.refreshOptions(true);

    $.ajax({
        url: "./idpSearch.php",
        type: "GET",
        dataType: "json",
        data: {
            q: query,
            index: this.settings.myIndex,
            language: document.documentElement.getAttribute('lang'),
            page_limit: 10,
        },
        error: function () {
            callback();
        },
        success: function (res) {
            callback(res.items);
        },
    });
}

document.addEventListener("DOMContentLoaded", function () {
    var moreOptions = document.getElementById("more-options");
    if (moreOptions) {
        moreOptions.addEventListener("click", showMoreOptions);
    }

    var togglePassword = document.getElementById("toggle-password");
    var password = document.getElementById("password");
    if (togglePassword) {
        togglePassword.addEventListener("click", function () {
            var type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            this.classList.toggle("icon-eye-slash");
        });
    }

    document.querySelectorAll('.idps-form-nojs-div').forEach(hideElement);
    document.querySelectorAll('.idps-form-div').forEach(showElement);

    var indexes = JSON.parse(document.body.getAttribute('data-searchboxindexes'));
    var placeholderTexts = JSON.parse(document.body.getAttribute('data-searchboxplaceholders'));
    var defaultPlaceholder = document.body.getAttribute('data-searchboxdefault');
    indexes.forEach(function (index) {
        $("#searchbox-" + index).selectize({
            valueField: "idpentityid",
            labelField: "text",
            options: [],
            create: false,
            maxItems: 1,
            myIndex: index,
            loadThrottle: 250,
            placeholder: placeholderTexts[index] ?? defaultPlaceholder,
            render: {
                option: selectizeRenderOption,
            },
            onChange: selectizeOnChange,
            score: selectizeScore,
            load: selectizeLoad,
        });
    });
});
