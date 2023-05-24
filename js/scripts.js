// Генерация поля в котором можно ввести причину отказа в заказе
$('#status').change(function(){
    var select = $(this).val();
    if (select == "Отклонен") {
        $('.input_div').show();
    }
    else{
        $('.input_div').hide();
    }
});
// Валидация на кириллицу
$("#lastname,#surname,#middlename").on('input', function(e) {
    var regexp = /[а-яёА-ЯЁ-]/i;
    if(!regexp.test(this.value) && this.value != '' && this.value != ' ') {
        e.preventDefault();
        $('.ru').show();
        $(".button-reg").css("display", "none"); 
        return false;
    }
    else {
        $('.ru').hide();
        $(".button-reg").css("display", "");
        return true;
    }
});
// Валидация на латиницу
$("#login").on('input', function(e) {
    var regexp = /[a-zA-Z0-9\-]/i;
    if(!regexp.test(this.value) && this.value != '') {
        e.preventDefault();
        $('.en').show();
        $(".button-reg").css("display", "none"); 
        $(".button-sign").css("display", "none"); 
        return false;
    }
    else {
        $('.en').hide();
        $(".button-reg").css("display", "");
        $(".button-sign").css("display", "");
        return true;
    }
});
// Валидация на длину пароля
$("#password").on('input', function() {
    if(this.value.length < 6 && this.value != ''){
        $('.pass').show();
        $(".button-reg").css("display", "none"); 
        return false;
    }
    else {
        $('.pass').hide();
        $(".button-reg").css("display", "");
        return true;
    }
});