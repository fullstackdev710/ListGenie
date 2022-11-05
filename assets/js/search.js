jQuery(document).ready(function ($) {
    $("input[type='checkbox']").change(function () {
        if (this.checked) {
            $(`.form-control[aria-label='${this.value}'`).parent().css("display", "block");
        } else {
            $(`.form-control[aria-label='${this.value}'`).parent().css("display", "none");
        }
    });
    $('.search-btn').click((e) => {
        const areaCode = $('#area_code_field').val();
        if (areaCode === '') {
            return;
        }
        let searchFields = {
            area: areaCode
        };
        let value;
        $(`input[type='checkbox']:checked`).each((index, e) => {
            value = $(`#${$(e).attr('id')}_field`).val();
            if (value !== '') {
                searchFields[`${$(e).attr('id')}`] = value;
            }
        });
        $.post(`${ajaxUrl}search/search`, searchFields, (data, status) => {
            $('.search-result').html(`Found ${data} record(s).`);
            $('.search-result').removeClass(`d-none`);
        });
    });
});