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
        var phoneReg = new RegExp('^[+]?[0-9]+-?[0-9]+jQuery', 'gi');
        
        if (nameInput.val() == '') {
            alert('Пожалуйста, введите имя');
            nameInput.focus();
            return false;
        } else if (phoneInput.val() == '') {
            alert('Пожалуйста, введите номер телефона');
            phoneInput.focus();
            return false;
        } else if (phoneReg.test(phoneInput.val()) === false) {
            jQuery('#wrongPhone').show();
            phoneInput.focus();
            return false;
        }
        else {
            jQuery('#wrongPhone').hide();
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

var slaids;
var widthBody;
var heitBlock

     widthBody = jQuery('body').width();

    if(widthBody > 1200){
    slaids = 5;
}

    if(widthBody <= 1200){
    slaids = 4;
}
  if(widthBody <= 760){
      slaids =2;  
    }
      if(widthBody <= 480){
      slaids =1;  
    }

jQuery('.wrap_main').slick({
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
//         // infinite: true,
        slidesToShow: slaids,
        slidesToScroll: 1,
        prevArrow: '<img class="lefts" src="img/backward.png">',  // стрелки
        nextArrow: '<img class="righets" src="img/before.png">'  // стрелки
    });
heitBlock = jQuery('.wrap_main div img').width();
jQuery('.wrap_main div img').css({'height':heitBlock});
console.log(heitBlock);


jQuery('.main_two').slick({
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        // infinite: true,
        // slidesToShow: 1,
        // slidesToScroll: 1,
        // prevArrow: '<img class="lefts" src="images/lefts.png">',  // стрелки
        // nextArrow: '<img class="righets" src="images/righets.png">'  // стрелки
    });
jQuery('.burger').on('click', function(){
    jQuery('.menu_top').slideToggle();
});

var heit = jQuery('#mainNav').height();
jQuery('.wrapp_global_top').css({"height":heit});

jQuery('.wrap_ul_menu').find('a').addClass('page-scroll');