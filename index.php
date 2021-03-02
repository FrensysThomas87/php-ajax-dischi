<?php
@require_once 'database/database.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Php ajax dischi</title>
   </head>
   <body>
     <?php foreach ($disks as $disk): ?>
       <hr>

       <div class="">
         <h1><?php echo $disk['title'] ?></h1>
         <h2><?php echo $disk['author'] ?></h2>
         <h3><?php echo $disk['year'] ?></h3>
       </div>

     <?php endforeach; ?>
   </body>
 </html>
