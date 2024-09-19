//test comment #2 29/02 16:18
(function () {
    $(document).ready(function () {
        $('[name="phone"]').attr('autocomplete', 'new-password');

        function setMask(maxNum, minNum, codee) {
            $('[name="phone"]').each(function () {
                var code = codee;
                var nums_after_code = minNum;
                var max_nums_after_code = maxNum;
                $(this).attr('required', 'required');
                $(this).attr('onclick', '(function(event){if (!event.target.value.length){event.target.value=\'' + code + '\';}})(event)');
                $(this).attr('oninput', '(function(event){if (event.target.value.length < ' + code.length + '){event.target.value=\'' + code + '\';}})(event)');
                $(this).attr('onKeyPress', 'if (event.keyCode < 48 || event.keyCode > 57) {event.returnValue=false;}');
                $(this).attr('value', code);
                $(this).attr('pattern', `^\\+?\\d{${code.length + nums_after_code-1},${code.length + max_nums_after_code-1}}$`)
                $(this).attr('maxlength', code.length + max_nums_after_code)
                $(this).attr('placeholder', code);
                $(this).val(code);
                $(this).unmask();
                $('[name="phone"]').click(function () {
                    if ($(this).val().length == codee.length) {
                        $(this).prop('selectionStart', codee.length);
                    }

                })
            });
        }

        $.mask.definitions['9'] = false;
        $.mask.definitions['x'] = "[0-9]";
        var phone_mask = {
            //            'BG': '+359-xxx-xxx-xxx',
            'CY': '+357-xx-xxx-xxx',
            'CZ': '+420-xxx-xxx-xxx',
            'ES': '+34 (xxx) xxx-xxx',
            'FR': '+33-xxx-xxx-xxx',
            'GR': '+30 (xxx) xxx-xxxx',
            
            'HU': '+36 (xxx) xxx-xxx',
            'LT': '+370 xxxxxxxx',
            'LV': '+371 xxxxxxxx',
            'PL': '+48 (xxx) xxx-xxx',
            'PT': '+351 xxxxxxxxx',
            //            'RO': '+40 xx xxx-xx-xx',
            'SI': '+386 (xxx) xxx xx',
            'SK': '+421 xxx xxx-xxx',
            'UA': '+380 xxxxxxxxx'
        };
        if ($('.country_select').val() == "AT") {
            setMask(15, 8, "+43");
        } else if ($('.country_select').val() == "DE") {
            setMask(15, 10, "+49");
        } else if ($('.country_select').val() == "EE") {
            setMask(8, 7, "+372");
        } else if ($('.country_select').val() == "RO") {
            setMask(10, 9, "+40");
        } else if ($('.country_select').val() == "BG") {
            setMask(11, 8, "+359");
        } else if ($('.country_select').val() == "HR") {
            setMask(9, 8, "+385");
        } else if ($('.country_select').val() == "IT") {
            setMask(10, 9, "+39");
        } else {
            $('input[name=phone]').removeAttr('pattern')
            $('input[name=phone]').attr('placeholder', phone_mask[$('.country_select').val()]);
            $('input[name=phone]').mask(phone_mask[($('.country_select').val()).toString()]);
        }
        $('.country_select').on('change', function () {
            console.log($(this).val());
            if ($(this).val() == "AT") {
                setMask(15, 8, "+43");
            } else if ($(this).val() == "DE") {
                setMask(15, 10, "+49");
            } else if ($(this).val() == "EE") {
                setMask(8, 7, "+372");
            } else if ($(this).val() == "RO") {
                setMask(10, 9, "+40");
            } else if ($(this).val() == "BG") {
                setMask(11, 8, "+359");
            } else if ($(this).val() == "HR") {
            setMask(9, 8, "+385");
        } else if ($(this).val() == "IT") {
            setMask(10, 9, "+39");
        } else {
                $('input[name=phone]').removeAttr('pattern')
                $('input[name=phone]').attr('placeholder', phone_mask[$(this).val()]);
                $('input[name=phone]').mask(phone_mask[($(this).val()).toString()]);
            }
        });
    });
}());
