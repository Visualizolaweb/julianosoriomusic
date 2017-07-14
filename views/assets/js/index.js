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
