<?php 
require 'inc/functions.inc.php';
db_connect();

htmlhead();

navbar();

homepageBanner();

?>

<h1>Most Popular</h1>

<hr>

<div id="popularSection">
<?php
require_once 'inc/functions.inc.php';
mostPopular();
?>
</div>

<h1>Categories</h1>

<hr>

<div id="category-container">
    <div class="category-item playstation-cat">
        <a name="productLink" href="productpage.php?gameCategoryID=1">Playstation</a>
    </div>

    <div class="category-item xbox-cat">
        <a name="productLink" href="productpage.php?gameCategoryID=2">Xbox</a>
    </div>

    <div class="category-item pc-cat">
    <a name="productLink" href="productpage.php?gameCategoryID=3">PC</a>
    </div>
</div>

<hr>

<?php
include 'inc/footer.php'; //footer bar
?>


