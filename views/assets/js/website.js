
// $("#fakeLoader").fakeLoader({
//     timeToHide:1200,
//     zIndex:"999",
//     bgColor:"#dd2b43",
//     spinner:"spinner1"
// });

let myTrack = document.getElementById("track");
let playButton = $('#play-button');
let barSize = 100;
let progressBar = $('#progress-bar');
let duration = 0;
let currentTime = 0;

$('#restart-button').click(function(){
    myTrack.currentTime = 0;
})
playButton.click(function(){
    if (!myTrack.paused && !myTrack.ended) {
        myTrack.pause();
        $('#play').remove();
        $('#play-button').after().wrapInner("<i class='icon--song fa fa-play' id='play'></i>");
        window.clearInterval(UpdateTime);
    } else {
        $('#play').remove();
        $('#play-button').after().wrapInner("<i class='icon--song fa fa-pause' id='play'></i>");
        myTrack.play();
        UpdateTime = setInterval(update,1);
    }
})


function update(){
    if (!myTrack.ended) {
        currentTime = myTrack.currentTime;
        let size = myTrack.currentTime*barSize/myTrack.duration;
        $('#progress-bar').css("width", size+"%");
    } else {
        currentTime = 0;
        $('#play').remove();
        $('#play-button').after().wrapInner("<i class='icon--song fa fa-pause' id='play'></i>");
        $('#progress-bar').css("width", "0");
    }
}

$('#default-bar').click(function(e){
    if (!myTrack.ended) {
        let mouseX = e.pageX - $('#default-bar').offset().left;
        let newTime = mouseX*myTrack.duration/$('#default-bar').width();
        console.log(newTime);
        myTrack.currentTime = newTime;

        $('#progress-bar').css("width", mouseX+"px");
    }
})

function pad(d){
    return (d<10) ? '0' + d.toString () : d.toString ();
}

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
    $("#track").html('<source src="views/assets/musica/Sleep.mp3" type="audio/mp3">');
    $.post("get-events",{data:active},function(data){
        var data = JSON.parse(data);
        $(".events--2__title").html(data['evento_nombre']);
        $(".events--2__subtitle").html(data['evento_direccion']);
        $(".events--2__text").html(data['evento_descripcion']);
    });
}

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
