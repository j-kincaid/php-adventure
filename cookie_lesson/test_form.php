<?php
setcookie("test", "cookiedata");
echo "cookiedata";
?>

<html>

<!-- 


1 Making an html form
2 PHP receives data via an html form
3 PHP echos data received via html form


4 PHP sets a cookie
5 PHP echos a cookie value 

The first parameter of setcookie() is the name of the cookie, and will be the index of the $_COOKIE[] array, once set.
If you setcookie("cookie_name", "cookie_value", time()+3600); then echo $_COOKIE['cookie_name']; it should print "cookie_value"

The cookie name can't contain a ? character.
    


-->

<form action="test_submit.php" name="test" method="POST">
What is your favorite cookie? <br>
<input type="text" action="test_submit.php" name="cookiedata" method="POST">

</form>

</html>