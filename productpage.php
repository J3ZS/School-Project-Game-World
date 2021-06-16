<?php 
include 'inc/databaseGames.php';
require 'inc/functions.inc.php';

htmlhead();

navbar();

if(!isset($_GET['gameCategoryID']))
{
    $sql="SELECT * FROM games"; // select all games
}
else{
    $id=$_GET['gameCategoryID'];
    $sql="SELECT * FROM games WHERE gameCategoryID=" . $id ; // select gameCategoryID=1
  
}

// empty array games
$games = [];

// execute the query and store in result
    $result = $conn->query($sql);
        while($games = $result->fetch_assoc())
{ 
?>
 <div class="productitem">
    <div class="productimage"><img id="covers"src=<?php echo $games["gameImage"];?>></div>
    <div class="productpriceTag">&euro;<?php echo $games["gamePrice"];?></div>
    <p><?php echo $games["gameTitle"];?></p>
    <p><a href="checkoutpage.php">Order</a></p>
</div>
<?php
        }
?>
