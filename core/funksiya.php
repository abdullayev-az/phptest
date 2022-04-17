<?php

session_start();
include "confing.php";
include "function.php";


//? qeydiyyat

if(isset($_POST['phone'])){
$mail_yoxla=$db->prepare("SELECT * FROM emekdaslar where mail=:mail");

$mail_yoxla->execute(array(
"mail"=>$_POST['mail']
));


$mail_say=$mail_yoxla->rowCount();

if($mail_say==1){

header('location:../index.php?giris=mail');

}else{


$add_user=$db->prepare("INSERT into emekdaslar set
name=:a,
mail=:b,
phone=:c,
pass=:d");
        
$add_user->execute(array(
"a"=>xss_clean($_POST['name']),
"b"=>xss_clean($_POST['mail']),
"c"=>xss_clean($_POST['phone']),
"d"=>md5($_POST['pass']),
));

if($add_user){
    header('location:../index.php');
}

}



}

//! Girish

if(isset($_POST['email'])){
    $login_y=$db->prepare("SELECT * FROM emekdaslar where mail=:a and pass=:b ");

    $login_y->execute(array(
        "a"=>$_POST['email'],
        "b"=>md5($_POST['password'])
    ));

    $say=$login_y->rowCount();

    if($say==1){
        $_SESSION['giris']=$_POST['email'];
        header('location:../panel.php');
    }
}


?>