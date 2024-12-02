<?php
    include_once 'getValue.php';
?>

<form action="storeUser.php" method="POST">

    <label class="user_email">Email</label>
    <input type="text" name="user_email" value="<?php echo getValue('user_email') ?>">
    
    <br>
    <label for="" class="user_password">Password</label>
    <input type="password" name="user_password" id="user_password" value="<?php echo getValue('user_password') ?>">
    <br>
    <input type="submit" class="sumbit" value="Sign up">
</form>

<a href="login.php">Go to login</a>