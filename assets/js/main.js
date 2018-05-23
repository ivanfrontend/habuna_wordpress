$(document).ready(function () {
    $('.master').tooltip();

    $('form').submit(function () {
        debugger;
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);

        formNm.attr('novalidate', 'novalidate');

        var nameInput = $('#name');
        var phoneInput = $('#phone');
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
                $(nameInput).val('');
                $(phoneInput).val('');                
                alert("СПАСИБО! ВАША ЗАЯВКА УСПЕШНО ОТПРАВЛЕНА! В БЛИЖАЙШЕЕ ВРЕМЯ С ВАМИ СВЯЖЕТСЯ КОНСУЛЬТАНТ!");
                $('#myModal').modal('hide');
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

     widthBody = $('body').width();

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

$('.wrap_main').slick({
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
//         // infinite: true,
        slidesToShow: slaids,
        slidesToScroll: 1,
        prevArrow: '<img class="lefts" src="img/backward.png">',  // стрелки
        nextArrow: '<img class="righets" src="img/before.png">'  // стрелки
    });
heitBlock = $('.wrap_main div img').width();
$('.wrap_main div img').css({'height':heitBlock});
console.log(heitBlock);


$('.main_two').slick({
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        // infinite: true,
        // slidesToShow: 1,
        // slidesToScroll: 1,
        // prevArrow: '<img class="lefts" src="images/lefts.png">',  // стрелки
        // nextArrow: '<img class="righets" src="images/righets.png">'  // стрелки
    });
$('.burger').on('click', function(){
    $('.menu_top').slideToggle();
});

var heit = jQuery('#mainNav').height();
jQuery('.wrapp_global_top').css({"height":heit});