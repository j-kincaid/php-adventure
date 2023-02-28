<?php
echo 'hello world!';
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        // echo htmlspecialchars($_GET['my_variable']);
        // echo '<br>';
        // echo htmlspecialchars($_GET['var2']);
        // echo '<br>';
        // echo htmlspecialchars($_GET['var3']);
        // echo '<br>';
        // echo htmlspecialchars($_GET['nomore']);
        // echo '<pre>';
        // print_r($_GET);
        // echo '</pre>';
        // echo $_GET['my_variable'][1];
        $guess = rand(1,10);
        ?>
        Enter a number greater than 
        <?php 
        echo $guess;
        ?>
        <form action="elephant.php" method="GET">
        <input type="text" name="user_input">
        <input type="hidden" name="guess" value="<?php 
        echo $guess;
        ?>">
        <!-- <input type="text" name="my_variable[]">
        <input type="text" name="my_variable[]">
        <input type="text" name="my_variable[]">
        <input type="text" name="my_variable[]">
        <input type="text" name="my_variable[]">
        <input type="text" name="my_variable[]">
        <input type="text" name="my_variable[]">
        <input type="submit"> -->
        </form>
    </body>
</html>