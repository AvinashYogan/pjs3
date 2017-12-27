<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Région paca</title>
  <link rel="stylesheet" href="css/foundation.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css"></script>
  <link rel="stylesheet" href="css/app.css"> 
  <link rel="stylesheet" href="css/foundation/style.css">













</head>
<body>


  <?php include('menu.html');?>

    <div class="row">
      <a href="evenements-culturels.php">
        <div class="img1 grid" style="margin-top: 20%">
         
          <h5 class="title2">Evenement culturel</h5>
        </div>
      </a>
      <a href="lieux-historiques.php">
       <div class="img1 grid">
         
        <h5 class="title2">Lieux Historique</h5>
      </div>
    </a>
    <a href="sortir_le_soir.php">
     <div class="img1 grid">
       
      <h5 class="title2">Sortir le soir</h5>
    </div>
  </a>
</div>


<?php include('footer.html');?>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>

<script type="text/javascript">



$(document).ready(function() {
    var link = ["img/Tourisme_Evenements_culturels.jpg",
    "img/lieux-historiques/Cathedrale_De_La_Major.jpg",
    "img/Electrobeach.jpg"]
    
    var i = 0;
    $(".img1").each(function(index) {
      
 //   $('#divID').css("background-image", "url(/myimage.jpg)");  
        $(this).css("background-image","url("+link[i++]+")");
        //Removes color from array so it can't be used again
    });
});


</script>