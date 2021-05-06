<?php

require_once('../config/functions.php');


if(isset($_POST['data'])){
    $userId = $_POST['id'];
    $someArray = json_decode($_POST['data'], true);
    
    if(!empty($someArray) && $userId != 0){ 
        foreach ($someArray as $key) {
            addToCart($con, $userId, $key['id'], $key['quantity']);
        }  
    }

}

?>