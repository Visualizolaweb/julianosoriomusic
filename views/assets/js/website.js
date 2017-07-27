
// $("#fakeLoader").fakeLoader({
//     timeToHide:1200,
//     zIndex:"999",
//     bgColor:"#dd2b43",
//     spinner:"spinner1"
// });

$('audio').mediaelementplayer();
$('.media-wrapper .mejs__time-float').remove();
$('.media-wrapper .mejs__time').remove();
$('.media-wrapper .mejs__time-handle').remove();
$('.song--item .mejs__time-float').remove();
$('.song--item .mejs__time-handle').remove();
$('.song--item .mejs__currenttime-container').remove();
$('.media-wrapper .mejs__volume-button').remove();
$('.song--item .mejs__volume-button').remove();
$('.media-wrapper .mejs__horizontal-volume-slider').remove();
$('.song--item .mejs__horizontal-volume-slider').remove();


$('section.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    autoHeight: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$('div.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    autoHeight: false,
    responsive:{
        0:{
            items:1
        }
    }
})

$('.icon--main').click(function(){
    $('.navbar-container').addClass('add');
})

$('.icon--menu').click(function(){
    $('.navbar-container').removeClass('add');
})

$('.navbar--link').click(function(){
    $('.navbar-container').removeClass('add');
})


// console.clear()
$('.events--link').click(function(e){
    e.preventDefault();
    $('.events--link').removeClass('active--link');
    $(this).addClass('active--link');
    var value = $(this).attr("href");
    $.post("get-events",{data:value},function(data){
        var data = JSON.parse(data);
        $(".events--2__title").html(data['evento_nombre']);
        $(".events--2__subtitle").html(data['evento_direccion']);
        $(".events--2__text").html(data['evento_descripcion']);
    });
})

$('.blog--button__text').click(function(e){
    e.preventDefault();
    var value = $(this).attr("href");
    console.log(value);
    $.post("update-blog",{data:value},function(data){
        var data = JSON.parse(data);
        if (data[0] == true) {
            document.location.href = data[1];
        }
    });
})
