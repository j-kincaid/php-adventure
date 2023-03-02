<?php
echo "Cookie Assignment";
?>

<!-- 
vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv

Instructions
I have an assignment for php:
Make a form that sends data to a php script, 
and saves the user's input in a cookie, and also 
displays the contents of the cookie.

^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
-->

<?php 

/* You must send setcookie() requests before any 
output from your script, including html tags. 
*/

$question = 'What would you like for your birthday?';
$gift_value ="";
setcookie($question, $gift_value);
/* Cookie expires in 1 hour */
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        // User input
        $gift= "What would you like for your birthday?";
        ?>
        


        <form action="cookie_form.php" method="GET">
        What would you like for your birthday? <input type="text" name="gift_value">
        <input type="hidden" name="gift" $gift_value="<?php 
        echo $gift_value;
        ?>">
        <input type="submit">
        <?php
        echo $_COOKIE[$question];
        ?>
        
        </form>
    </body>
</html>
