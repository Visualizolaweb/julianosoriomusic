    <script src="views/assets/js/jquery.min.js"></script>
    <script src="views/assets/js/owl.carousel.min.js"></script>
    <!-- <script src="views/assets/js/loader.min.js"></script> -->
    <script src="views/assets/js/tether.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script>
    function loadsong(){
      $.post("index.php?c=discografia&a=loadSongs",function(data){
         var data = JSON.parse(data);

         for (var i = 0; i < data.length; i++) {
           $(".container--songs").html('<li class="song--item"><audio id="player" class="audio" preload="none" style="width:100%;"><source src="'+data[i][2]+'" type="audio/mp3"></audio></li>');
         }



      });
    };

    </script>
    <script src="views/assets/js/mediaelement.min.js"></script>
    <script src="views/assets/js/website.js"></script>
    </body>
</html>
