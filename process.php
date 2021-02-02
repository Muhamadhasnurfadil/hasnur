<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          = $_POST['email'];
    $telp           = $_POST['telp'];
    $password       = $_POST['password'];

    $sql = "INSERT INTO users (firstname, lastname, email, telp, password ) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $telp, $password]);
    if($result){
        echo 'Successfully saved.';
    }else{
        echo 'There were errors while saving the data.';
    }
}else{
    echo 'No data';
}
?>