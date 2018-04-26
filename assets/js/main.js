jQuery(document).ready(function () {
    jQuery('.master').tooltip();

    jQuery('form').submit(function () {
        debugger;
        // Получение ID формы
        var formID = jQuery(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = jQuery('#' + formID);

        formNm.attr('novalidate', 'novalidate');

        var nameInput = jQuery('#name');
        var phoneInput = jQuery('#phone');
        var phoneReg = new RegExp('^[+]?[0-9]+-?[0-9]+$', 'gi');
        
        if (nameInput.val() == '') {
            alert('Пожалуйста, введите имя');
            nameInput.focus();
            return false;
        } else if (phoneInput.val() == '') {
            alert('Пожалуйста, введите номер телефона');
            phoneInput.focus();
            return false;
        } else if (phoneReg.test(phoneInput.val()) === false) {
            $('#wrongPhone').show();
            phoneInput.focus();
            return false;
        }
        else {
            $('#wrongPhone').hide();
        }


        $.ajax({
            type: "POST",
            url: 'send.php',
            data: formNm.serialize(),
            success: function (data) {
                jQuery(nameInput).val('');
                jQuery(phoneInput).val('');                
                alert("СПАСИБО! ВАША ЗАЯВКА УСПЕШНО ОТПРАВЛЕНА! В БЛИЖАЙШЕЕ ВРЕМЯ С ВАМИ СВЯЖЕТСЯ КОНСУЛЬТАНТ!");
                jQuery('#myModal').modal('hide');
            },
            error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                alert("СООБЩЕНИЕ НЕ ОТПРАВЛЕНО! ПОПРОБУЙТЕ ПОЗЖЕ");                
            }
        });
        return false;
    });
});