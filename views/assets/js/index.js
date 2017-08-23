window.onload = function() {
	$('.loader').addClass('load');
}
$("#pas_log").focus(function(){
  $("#ema_log").siblings("span").remove();
  var email = $("#ema_log").val();
  $.post("valid-email",{data:email},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        $("#ema_log").after("<span class='error'>El correo no existe</span>");
        $("#btn_log").attr("disabled",true);
      }else{
        $("#btn_log").attr("disabled",false);
      }
  });
});
$("#ema_log").focus(function(){
  $(this).siblings("span").remove();
  $("#btn_log").attr("disabled",false);
});

$("#frm_log").submit(function(e){
      $("#pas_log").siblings("span").remove();
      e.preventDefault();
      var data = [$("#ema_log").val(),
                  $("#pas_log").val()];
      $.post("login",{data:data},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
              document.location.href = data[1];
          }else{
              $("#pas_log").after("<span>"+data[1]+"</span>");
          }
      });
});
$("#frm_perfil").submit(function(e){
      e.preventDefault();
      var JsonObj=[];
      $("input[name=data]").each(function(){
        var structure = {};
        structure = $(this).val();
        JsonObj.push(structure);
      });
      $.post("update-user",{data:JsonObj},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
            swal(data[2]);
            $('.confirm').click(function(){
              document.location.href = data[1];
            })
          }else{
            swal(data[1]);
          }
      });
});
$("#frm_ban").submit(function(e){
      e.preventDefault();
      var data = [$("#ban_tit").val(),
                  $("#ban_sub").val()];
      $.post("update-banner",{data:data},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
              swal(data[2]);
              $('.confirm').click(function(){
                document.location.href = data[1];
              })
          }else{
              swal(data[1]);
          }
      });
});
$("#frm_blog").submit(function(e){
      e.preventDefault();
      var data = [$("#tit_blo").val(),
                  $("#des_blo").val(),
                  $("#sel_blo").val()];
      $.post("crear-blog",{data:data},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
              swal(data[2]);
              $('.confirm').click(function(){
                document.location.href = data[1];
              })
          }
      });
});
$("#frm_blo_up").submit(function(e){
      e.preventDefault();
      var data = [$("#blo_tit_u").val(),
                  $("#blo_des_u").val(),
                  $("#blo_sel_u").val()];
      $.post("update-blog-admin",{data:data},function(data){
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
$("#frm_contacto").submit(function(e){
      e.preventDefault();
      var data = [$("#ema_con").val(),
                  $("#tel_con").val()];
      $.post("update-contacto",{data:data},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
              swal(data[2]);
              $('.confirm').click(function(){
                document.location.href = data[1];
              })
          }else{
            swal(data[1]);
          }
      });
});

$("#startDate").focusout(function(){
    $("#startDate").siblings("span").remove();
    var data = $("#startDate").val();
    if (data.length > 0) {
        var RegExp = /^\d{4}-\d{2}-\d{2}$/;
        if (RegExp.test(data)) {
            $("#startDate").removeClass("input--error")
            $("#startDate").siblings("span").remove();
            $("#btn--events").attr("disabled",false);
        } else {
            $("#startDate").addClass("input--error")
            $("#startTime").after("<span class='error'>Formato invalido</span>")
            $("#btn--events").attr("disabled",true);
        }
    }
})

$("#endDate").focusout(function(){
    $("#endDate").siblings("span").remove();
    var data = $("#endDate").val();
    if (data.length > 0) {
        var RegExp = /^\d{4}-\d{2}-\d{2}$/;
        if (RegExp.test(data)) {
            $("#endDate").removeClass("input--error")
            $("#endDate").siblings("span").remove();
            $("#btn--events").attr("disabled",false);
        } else {
            $("#endDate").addClass("input--error")
            $("#endTime").after("<span class='error'>Formato invalido</span>")
            $("#btn--events").attr("disabled",true);
        }
    }
})

$("#startTime").focusout(function(){
    $("#startTime").siblings("span").remove();
    var data = $("#startTime").val();
    if (data.length > 0) {
        var RegExp = /^\d{2}:\d{2}$/;
        if (RegExp.test(data)) {
            $("#startTime").removeClass("input--error")
            $("#startTime").siblings("span").remove();
            $("#btn--events").attr("disabled",false);
        } else {
            $("#startTime").addClass("input--error");
            $("#startTime").after("<span class='error'>Formato invalido</span>");
            $("#btn--events").attr("disabled",true);
        }
    }
})

$("#endTime").focusout(function(){
    $("#endTime").siblings("span").remove();
    var data = $("#endTime").val();
    if (data.length > 0) {
        var RegExp = /^\d{2}:\d{2}$/;
        if (RegExp.test(data)) {
            $("#endTime").removeClass("input--error")
            $("#endTime").siblings("span").remove();
            $("#btn--events").attr("disabled",false);
        } else {
            $("#endTime").addClass("input--error");
            $("#endTime").after("<span class='error'>Formato invalido</span>");$("#btn--events").attr("disabled",true);
        }
    }
})

$("#frm_eventos").submit(function(e){
      e.preventDefault();
      var data = [
                    $("#eventTitle").val(),
                    $("#eventAddress").val(),
                    $("#startDate").val(),
                    $("#startTime").val(),
                    $("#endDate").val(),
                    $("#endTime").val(),
                    $("#eventDescription").val(),
                    $("#eventEstado").val()
                 ];
      $.post("crear-evento",{data:data},function(resp){
        var resp = JSON.parse(resp);
        if (resp[0] == true) {
          swal(resp[2]);
          $('.confirm').click(function(){
            document.location.href = resp[1];
          })
        }
      });
});

$("#frm_eventos_up").submit(function(e){
      e.preventDefault();
      var JsonObj=[];
      $("input[class=input--form]").each(function(){
        var structure = {};
        structure = $(this).val();
        JsonObj.push(structure);
      });
      var description = $('#eventDesc').val();
      JsonObj.push(description);
      var estado = $('#eventEstado').val();
      JsonObj.push(estado);
      $.post("actualizar-evento",{data:JsonObj},function(resp){
        var resp = JSON.parse(resp);
        if (resp[0] == true) {
          swal(resp[2]);
          $('.confirm').click(function(){
            document.location.href = resp[1];
          })
        }
      });
});
$("#frm_perfil2").submit(function(e){
  e.preventDefault();
  var data = [$("#fra_per").val(),
              $("#pf1_per").val(),
              $("#pf2_per").val()];
  $.post("update-perfil",{data:data},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      swal(data[2]);
      $('.confirm').click(function(){
        document.location.href = data[1];
      })
    }else{
      swal(data[2]);
    }
  });
});

$.extend( true, $.fn.dataTable.defaults, {
    "ordering": false,
    "lengthChange": false,
    "info": false
});

$(document).ready(function(){
    $('#table').DataTable({
        "language": {
            "responsive" : true,
            "search" : "Buscar",
            "zeroRecords": "No se encontró ningún resultado",
            "paginate" : {
                "first" : "",
                "last" : "",
                "next" : "<i class='material-icons table--icon'>navigate_next</i>",
                "previous" : "<i class='material-icons table--icon'>navigate_before</i>"
            }
        }
    });
});
