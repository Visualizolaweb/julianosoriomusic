window.onload = function() {
	$('.loader').addClass('load');
}
$('.ancla--link').click(function(e){
		e.preventDefault();
		var strAncla = $(this).attr('href');
			$('body,html').stop(true,true).animate({
				scrollTop: $(strAncla).offset().top
			},1500);

	});

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

$('.player--main button').click(function(){
	var button = $(this).attr("aria-label");
	if (button == "Play") {
		$(".album--vinilo").addClass("album--rotate");
	} else {
		$(".album--vinilo").removeClass("album--rotate");
	}
	var titulo = $(".player--main__text").html();
	$(".song--title").html(titulo);
})

$(".mejs__inner button").click(function(){
    var id = $(this).attr("aria-controls");
		var button = $(this).attr("aria-label");
		if (button == "Play") {
			$(".album--vinilo").addClass("album--rotate");
		} else {
			$(".album--vinilo").removeClass("album--rotate");
		}
		var titulo = $("#"+id+" .song--name").html();
		$(".song--title").html(titulo);
    $("#btnlyrics").attr("data-target","#lyric_"+id);
});

$(document).ready(function(){
  $.post("index.php?c=pagina&a=loadSongs",function(data){
     	var data = JSON.parse(data);
     	for (var i = 0; i < data.length; i++) {
       	$("#mep_"+(i+1)+" .mejs__time-rail").html("<span class='song--name'>"+ data[i][1] +"</span>");
     	}
  });
	var active = $('.active--link').attr("href");
	$.post("get-events",{data:active},function(data){
			var data = JSON.parse(data);
			$(".events--2__title").html(data['evento_nombre']);
			$(".events--2__subtitle").html(data['evento_direccion']);
			var descripcion = data['evento_descripcion'].substring(0, 600);
			$(".events--2__text").html(descripcion);
	});
});

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
        var descripcion = data['evento_descripcion'].substring(0, 600);
        $(".events--2__subtitle").html(data['evento_direccion']);
        $(".events--2__text").html(descripcion);
    });
})
$("#frm_read_blog").submit(function(e){
      e.preventDefault();
      var data = $("#desc_blog").val();
      $.post("create-comentario",{data:data},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
						swal(data[1]);
						$('.confirm').click(function(){
							document.location.href = data[2];
						})
          }else{
						swal(data[1]);
          }
      });
});

$('.events--article__link').click(function(e){
    e.preventDefault();
    var value = $(this).attr("href");
    document.location.href = "eventos&token="+value;
})

// $(".mejs__play button[title='Play']").click(function(){
// 		$(".album--vinilo").toggleClass("album--rotate");
// })
