$("body").on('click', '[href*="#"]', function(e){
    var fixed_offset = 120;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();
});


jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__link"),function(){
        if(this.href==url){
            $(this).addClass('header__link--active');
        }
    });
});

$(".start__hidden").click(function(e) {
    e.preventDefault();
    $('.hidden').toggleClass('hidden--active');

})


$('#num').animate({ num: 18 - 3/* - начало */ }, {
    duration: 3000,
    step: function (num){
        this.innerHTML = (num + 3).toFixed(0)
    }
});
$('#num2').animate({ num: 108325 - 3/* - начало */ }, {
    duration: 5000,
    step: function (num){
        this.innerHTML = (num + 3).toFixed(0)
    }
});

$('#num3').animate({ num: 31632 - 3/* - начало */ }, {
    duration: 5000,
    step: function (num){
        this.innerHTML = (num + 3).toFixed(0)
    }
});
