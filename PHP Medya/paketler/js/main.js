"use strict"
// Main slider initiate
$('.main-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    fade: true
});

    // Add scroll animation for hash links
    $('a[href*=\\#]').on('click', function(event){
        event.preventDefault();
        var elPos = 0;
        if($(this).attr('href')!='#'){
            elPos = $(this.hash).offset().top;
        }
        $('html,body').animate({scrollTop:elPos}, 500);
    });

    // About page "about.html"
    // Fix image resize issue.
    var photoHolder1 = $(".photo-holder.photo1", ".text-photo-sc");
    var textHolder1 = $(".text-holder.text1",".text-photo-sc");

    var photoHolder2 = $(".photo-holder.photo2", ".text-photo-sc");
    var textHolder2 = $(".text-holder.text2",".text-photo-sc");
    
    if ($(window).width() > 990) {
        photoHolder1.css("height",textHolder1.height());
        photoHolder2.css("height",textHolder2.height());
    }
    // About page "about.html"
    // Fix image resize issue when the window resized
    $(window).on("resize",function() {
        if ($(window).width() > 990) {
            photoHolder1.css("height",textHolder1.height());
            photoHolder2.css("height",textHolder2.height());
        }
        return false;
    });
});