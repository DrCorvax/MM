<!DOCTYPE html>

<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="description" content="Model Mya Maria Obukhovskaya">
 <meta name="keywords" content="Mya Maria, Maria Obukhovskaya, Mya Maria Obukhobvskaya, Model, Elite Model, Elite Model Vietnam"> 
 <title>Mya Maria Obukhovskaya - Portfolio</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="lightbox/css/vlightbox1.css" type="text/css">
 <link rel="stylesheet" href="lightbox/css/visuallightbox.css" type="text/css" media="screen">
 <script src="lightbox/js/jquery.min.js" type="text/javascript"></script>
 <script src="lightbox/js/visuallightbox.js" type="text/javascript"></script>
 <script src="lightbox/js/vlbdata1.js" type="text/javascript"></script>
</head>

<body class="body">

 <div class="sitecontent">

  <?php
   include "info.php";
   
   $id=$_GET["id"];
   
   $id_next=$id+1;
   if ($id_next==count($gallery))
   {
    $id_next=0;
   }
  
   $id_prev=$id-1;
   if ($id_prev<0)
   {
    $id_prev=count($gallery)-1;
   }
  ?>

  <p class="pagetitle"><?php echo $gallery[$id]["title"]; ?></p>
  <a class="gallerymenuitem" style="margin-left: 154px;" href="gallery.php?id=<?php echo $id_prev; ?>" title="<?php echo $gallery[$id_prev]["title"]; ?>">&lt;</a>
  <a class="gallerymenuitem" style="margin-left: 20px;" href="full.php#gallery<?php echo $id; ?>" title="Back to portfolio">Back</a>
  <a class="gallerymenuitem" style="margin-left: 20px;" href="gallery.php?id=<?php echo $id_next; ?>" title="<?php echo $gallery[$id_next]["title"]; ?>">&gt;</a>

  <div class="spacer20"></div>

  <div style="margin-left: 39px;">

  <?php
   for ($i=1; $i<=$gallery[$id]["num"]; $i++)
   {
    $slide='<div class="gallerythumb">'
          .'<a class="vlightbox1" href="img/gallery/'.$gallery[$id]["dir"].'/'.$gallery[$id]["file"].str_pad($i, 2, '0', STR_PAD_LEFT).'.jpg" title="'.$gallery[$id]["title"].'">'
          .'<img class="gallerythumbimg" src="img/gallery/'.$gallery[$id]["dir"].'/thumb/'.$gallery[$id]["file"].str_pad($i, 2, '0', STR_PAD_LEFT).'.png" alt="'.$gallery[$id]["title"].'">'
          .'</a>'.str_pad($i, 2, '0', STR_PAD_LEFT).'</div>'
          ."\n";

    echo $slide;
   }
  ?>

  </div>

  <div style="clear: both;">
   <a class="gallerymenuitem" style="margin-left: 154px;" href="gallery.php?id=<?php echo $id_prev; ?>" title="<?php echo $gallery[$id_prev]["title"]; ?>">&lt;</a>
   <a class="gallerymenuitem" style="margin-left: 20px;" href="full.php#gallery<?php echo $id; ?>" title="Back to portfolio">Back</a>
   <a class="gallerymenuitem" style="margin-left: 20px;" href="gallery.php?id=<?php echo $id_next; ?>" title="<?php echo $gallery[$id_next]["title"]; ?>">&gt;</a>
  </div>
  
  <div class="spacer20"></div>

 </div> <!-- class="sitecontent" -->

</body>

</html>