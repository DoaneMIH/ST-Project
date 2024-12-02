<?php 
    function getValue($value){
        if(!empty($_SESSION[$value])){
            echo $_SESSION[$value];
        }
    }
?>