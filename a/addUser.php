<?php

include('db/db.php');

    $flag = 0;

if(isset($_POST['submit'])){
    $result = mysqli_query($con,"INSERT INTO users (username) values ('$_POST[username]')");
    if($result){
        $flag = 1;
    }
}

?>