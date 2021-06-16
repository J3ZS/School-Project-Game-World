<?php 

function db_connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gameworld";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
}

function htmlhead()
{ 

    ?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="css/index.css">
        </head>
        <body>
    <?php
}

function navbar()
{
    ?>
    <div class="header">
    <a href="index.php" class="logo">Game World</a>
        <nav id="main-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="productpage.php">Games</a></li>
            </ul>
        </nav>
    </div>
    </div>
    </header>
    <?php
}

function homepageBanner()
{
    ?>
    <div class="homepageBanner">
    <img class="Bannerimg" src="img/Banner.jpg"/>
    <div class="text">
        <h1>Welcome to GameWorld</h1>
        <p>The most complete gaming webshop!</p>
        <hr>
    </div>
    </div>

    
    <?php
}

function mostPopular()
{
    include 'inc/databaseGames.php';
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
    <p><a href="checkoutpage.php">Order</a></p>
 </div>
    <?php
        }
    ?>
    <?php
}

function contactForm()
{

    include 'inc/databaseGames.php';

    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $phone=$_REQUEST['phone'];
    $city=$_REQUEST['city'];
    $email=$_REQUEST['email'];
    $msg=$_REQUEST['message'];

    // Inserting data into the 'contact' table
    $query=mysqli_query($conn, "INSERT INTO contactform(firstname,lastname,phone,city,email,message) VALUES ('$firstname','$lastname','$phone','$city','$email','$msg')") or die(mysqli_error($conn));

    mysqli_close($conn);

    header("location:contact.php?note=Success!");

}
?>
    