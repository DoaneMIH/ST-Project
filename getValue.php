<?php 
    //get the value if ever mag enter nga sala ang value para di na mag liwat
    function getValue($value){
        if(!empty($_SESSION[$value])){
            echo $_SESSION[$value];
        }
    }

    //filter validate email
    function validEmail ($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
        return false;
    }
?>