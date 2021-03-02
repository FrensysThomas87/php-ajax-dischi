<?php
@require_once 'database/database.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Php ajax dischi</title>
     <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
     <div class="container">
       <header>
         <div class="header-container">
           <img src="img/spotify.jpg" alt="">
         </div>

       </header>
       <div class="album-container">
          <?php foreach ($disks as $disk): ?>
          <div class="albums">
            <div class="album-cover-container">
              <img src="<?php echo $disk['cover'] ?>" alt="">
            </div>
            <h1><?php echo $disk['title'] ?></h1>
            <h2><?php echo $disk['author'] ?></h2>
            <h3><?php echo $disk['year'] ?></h3>
          </div>
        <?php endforeach; ?>
        </div>

      </div>


   </body>
 </html>
