<?php
$dataReady = true;
if (isset($_COOKIE['MYSESSID'])){
    session_id($_COOKIE['MYSESSID']);
    session_start();
    echo "<script>console.log('Debug Objec123ts: " . session_id() . "' );</script>";
    echo "<script>console.log('Debug Objec123ts: " . json_encode($_SESSION) . "' );</script>";
    if (isset($_SESSION['login'], $_SESSION["password"])) {
        $login = $_SESSION["login"];
        $password = $_SESSION["password"];
    } else {
        $login = "";
        $password = "";
        $dataReady = false;
    }
    if (isset($_SESSION['m'])) {
        $m = $_SESSION['m'];
    } else {
        $dataReady = false;
    }
    if (isset($_REQUEST["type"])) {
        $type = $_REQUEST["type"];
        $_SESSION['type'] = $type;
    } else if (isset($_SESSION['type'])) {
        $type = $_SESSION['type'];
    } else {
        $type = "";
        $dataReady = false;
    }
    if (isset($_REQUEST["salon"])) {
        $salon = $_REQUEST["salon"];
        $_SESSION['salon'] = $salon;
    } else {
        unset($_SESSION['salon']);
        $salon = "";
    }
    if (isset($_REQUEST["podogrev"])) {
        $podogrev = $_REQUEST["podogrev"];
        $_SESSION['podogrev'] = $podogrev;
    } else {
        unset($_SESSION['podogrev']);
        $podogrev = "";
    }
    if (isset($_REQUEST["luk"])) {
        $luk = $_REQUEST["luk"];
        $_SESSION['luk']=$luk;
    } else {
        unset($_SESSION['luk']);
        $luk = "";
    }
    if (isset($_REQUEST["name"])) {
        $name = $_REQUEST["name"];
        $_SESSION['name']=$name;
    } else if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    } else {
        $name = "";
    }
    if (isset($_REQUEST["phone"])) {
        $phone = $_REQUEST["phone"];
        $_SESSION['phone']=$phone;
    } else if (isset($_SESSION['phone'])) {
        $phone = $_SESSION['phone'];
    } else {
        $phone = "";
    }
    if (isset($_REQUEST["email"])) {
        $email = $_REQUEST["email"];
        $_SESSION['email'] = $email;
    } else if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else {
        $email = "";
    }
} else {
   $login = "";
    $password = "";
    $dataReady = false;
}
