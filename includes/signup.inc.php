<?php
if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
}else{
    header("Location: ../index.php?signup=error");
}