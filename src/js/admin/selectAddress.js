jQuery(async function ($) {
    const selectProvince = $('.js_province').find('select');
    const selectDistrict = $('.js_district').find('select');
    const selectWard = $('.js_ward').find('select');

    // Check if page not edit
    if (!window.location.search.includes('action=edit')) {
        selectProvince.prepend('<option selected>--</option>');
        selectDistrict.empty().prepend('<option selected>--</option>');
        selectWard.empty().prepend('<option selected>--</option>');
    }

    const getData = async () => {
        try {
            const data = await $.ajax({
                url: dataAddress.ajaxUrl,
                data: {
                    action: 'dataAddress',
                },
                dataType: 'json',
            });
            return data;
        } catch (err) {
            console.log(err);
            return;
        }
    };

    const data = await getData();

    let district;

    selectProvince.on('change', async function () {
        selectDistrict.empty().prepend('<option selected>--</option>');
        selectWard.empty().prepend('<option selected>--</option>');

        const code = $(this).val();

        if (code !== '--') {
            district = Object.values(data).filter((el) => el.code === code)[0][
                'quan-huyen'
            ];

            renderOption(selectDistrict, district);
        }
    });

    selectDistrict.on('change', async function () {
        selectWard.empty().prepend('<option selected>--</option>');

        const code = $(this).val();

        if (code !== '--') {
            const ward = Object.values(district).filter(
                (el) => el.code === code
            )[0]['xa-phuong'];

            renderOption(selectWard, ward);
        }
    });

    const renderOption = (element, data) => {
        Object.values(data).map(function (el) {
            element.append(`<option value="${el.code}">${el.name}</option>`);
        });
    };
});
