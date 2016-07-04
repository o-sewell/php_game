<?php
/*session_destroy();
$con = mysql_connect('localhost', 'root', '')
  or die(mysql_error());

  mysql_select_db('games', $con)
    or die(mysql_error());
*/

    //user form
    if( isset($_POST['submit']) == TRUE) {

      //Hold a variable
      //$username = trim(mysql_real_escape_string(strip_tags(stripslashes($_POST['username']))));

      //STORE OUR SESSION
      $_SESSION['username'] = $username;

      //Redirect the user
      header("Location: ./");

}

    /*if( isset($_GET['logout']) == TRUE ) {
      session_destroy();
      header("Location: ./");
    }*/


function display_items($item = null) {

  $items = array(
      "rock"     => '<a href="?item=rock">Rock<br /><img src="images/rock.jpg" alt="Rock"></a>',
      "paper"    => '<a href="?item=paper">Paper<br /><img src="images/paper.jpg" alt="Paper"></a>',
      "scissors" => '<a href="?item=scissors">Scissors<br /><img src="images/scissors.jpg" alt="Scissors"></a>'
  );

  if( $item == null) {
      foreach( $items as $item => $value) {
         echo $value;
      }
    } else {
      //echo $items[$item];
      echo str_replace("?item={$item}" , "#", $items[$item]);
    }

}

function game() {

  if(isset($_GET['item']) == TRUE) {
      //Valid Items
      $items = array('rock', 'paper', 'scissors');

      //User's Item
      $user_item = strtolower($_GET['item']);

      //Computer's Items
      $comp_item = $items[rand(0, 2)];

      // Add a go back link
      echo '<div><a href="./">Play Again!</a></div>';


      //User's Item is Valid
      if( in_array($user_item, $items) == FALSE) {

        echo "You must Choose Rock , Paper or Scissors";
        die;

      }

      // Scissors > Paper
      // Paper > Rock
      // Rock > Scissors

     if( $user_item == 'scissors' && $comp_item == 'paper' ||
         $user_item == 'paper' && $comp_item == 'rock' ||
         $user_item == 'rock' && $comp_item == 'scissors') {
           echo '<h2> You Win !</h2>';
         }

     if( $comp_item == 'scissors' && $user_item == 'paper' ||
         $comp_item == 'paper' && $user_item == 'rock' ||
         $comp_item == 'rock' && $user_item == 'scissors') {
               echo '<h2> You Lose !</h2>';
             }
     if( $user_item == $comp_item ) {
       echo '<h2> Tie! </h2>';
     }

     // User's Item
     display_items($user_item);

     // Computers item
     display_items($comp_item);


  } else {

    display_items();

  }


}




 ?>
