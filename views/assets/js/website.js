// $("#fakeLoader").fakeLoader({
//     timeToHide:1200,
//     zIndex:"999",
//     bgColor:"#dd2b43",
//     spinner:"spinner1"
// });

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
window.onload = function() {
    var active = $('.active--link').attr("href");
    console.log(active);
    $.post("get-events",{data:active},function(data){
        var data = JSON.parse(data);
        if (data[0]==true) {
            alert(true)
        }else{
            alert(false)
        }
    });
}

$('.events--link').click(function(e){
    e.preventDefault();
    $('.events--link').removeClass('active--link');
    $(this).addClass('active--link');
    var value = $(this).attr("href");
    console.log(value);
    $.post("get-events",{data:value},function(resp){
        var resp = JSON.parse(resp);
        if (resp[0]==true) {
            alert(true)
        }else{
            alert(false)
        }
    });
})
