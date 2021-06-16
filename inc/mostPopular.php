<?php
include 'inc/databaseGames.php'; //Database game login
?>
<?php 
$sql = "SELECT * FROM `games` WHERE `gamePopular`;";
$result = $conn->query($sql);
  while($games = $result->fetch_assoc())
  {
?>
<div class="popular-item">
    <div class="popular-image"><img id="covers"src=<?php echo $games["gameImage"];?>>
    <div class="priceTag">&euro;<?php echo $games["gamePrice"];?>
      </div>
  </div>
    <p><?php echo $games["gameTitle"];?></p>
    <p>Order</p>
</div>
<?php
  }
?>