$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 100){
            $(".netflix-navbar").css("background", "#0C0C0C");
        }else{
            $(".netflix-navbar").css("background", "transparent");
        }
    })
})

$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 800){
            $("netflix-video").prop('muted', true);
        }else{
            $("netflix-video").prop('muted', false);
        }
    })
})
