<?php session_start() ?>
<?php include 'game.php' ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <title> </title>
      <link rel="stylesheet" href="styles.css">

    </head>

    <body>
      <?php
      echo game();
      ?>
    </body>
</html>
<!--
<//?php if(isset($_SESSION['username']) == FALSE ) : ?>
     <form method="post">
       <h3> Please supply username to play </h3>
       <label for="username">Username:</label>
       <input type="text" name="username" id="username" />
       <input type="submit" name="submit" value="Let's Play!" />
     </form>

 <//?php  else : ?>
     <div id="game">
       <h3> Welcome Back  <?= $_SESSION['username'] ?><a href="?logout=true"> Logout </a></h3>
       <?php  game(); ?>
     </div>

   <//?php endif; ?> -->
