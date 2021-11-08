<!DOCTYPE html>

<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="description" content="Model Mya Maria Obukhovskaya">
 <meta name="keywords" content="Mya Maria, Maria Obukhovskaya, Mya Maria Obukhobvskaya, Model, Elite Model, Elite Model Vietnam"> 
 <title>Mya Maria Obukhovskaya - Portfolio</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="body">

 <div class="sitecontent">

  <div class="spacer20"></div>

  <p class="pagetitle">Portfolio of Mya Maria</p>

  <div class="spacer20"></div>

  <?php
   include "info.php";
   
   for ($i=0; $i<count($gallery); $i++)
   {
    $album='<div class="galleryinfo">'."\n"
          .' <a id="gallery'.$i.'"></a>'."\n"
          .' <div class="gallerytitle">'.$gallery[$i]["title"].'</div>'."\n"
          .' <div class="gallerydescription">'.$gallery[$i]["descr"].'</div>'."\n"
          .' <a href="gallery.php?id='.$i.'"><img class="gallerycover imageround imageshadow" src="img/gallery/'.$gallery[$i]["dir"].'/Cover.jpg" alt="Gallery cover" title="'.$gallery[$i]["title"].'" ></a>'."\n"
          .'</div>'."\n\n";
   
    echo $album;
   }
  ?>

 </div> <!-- class="sitecontent" -->

</body>

</html>