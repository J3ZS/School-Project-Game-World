<?php 
require 'inc/functions.inc.php';

include 'inc/databaseGames.php';

htmlhead();

navbar();

?>
    <div class="container">
        <h3>Request Quote or Submit feedback</h3>
        <form action="contactform.php" method="POST" name="contactform">
            <div class="form-group">
                Name: <input type="text" name="firstname" value:"">
            </div>
            <div class="form-group">
                lastname: <input type="text" name="lastname" value:"">
            </div>
            <div class="form-group">
                phone: <input type="tel" name="phone" value:"">
            </div>
            <div class="form-group">
                City: <input type="text" name="city" value:"">
            </div>
            <div class="form-group">
                Email: <input type="email" name="email" value:"">
            </div>
            <div class="form-group">
                Message: <input type="text" name="message">
            </div>
            <div class="form-group">
        <button type="submit" value="submit">Submit</button>
    </div>
        </form>
    </div>
</body>