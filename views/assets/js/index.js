
$("#pas_log").focus(function(){
  $("#ema_log").siblings("span").remove();
  var email = $("#ema_log").val();
  $.post("valid-email",{data:email},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        $("#ema_log").after("<span>El correo no existe</span>");
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
            document.location.href = data[1];
            alert(data[2]);
          }else{
            alert(data[1]);
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
              alert(data[2]);
              document.location.href = data[1];
          }else{
              alert(data[1]);
          }
      });
});
$("#frm_blog").submit(function(e){
      e.preventDefault();
      var data = [$("#tit_blo").val(),
                  $("#des_blo").val()];
      $.post("crear-blog",{data:data},function(data){
          var data = JSON.parse(data);
          if (data[0] == true) {
              alert(data[2]);
              document.location.href = data[1];
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
              alert(data[2]);
              document.location.href = data[1];
          }else{
            alert(data[1]);
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
