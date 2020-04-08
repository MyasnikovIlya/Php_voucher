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
    }
    if (isset($_SESSION['m'])) {
        $m = $_SESSION['m'];
    } else {
        $dataReady = false;
    }
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    } else {
        $name = "";
        $dataReady = false;
    }
    if (isset($_SESSION['phone'])) {
        $phone = $_SESSION['phone'];
    } else {
        $phone = "";
        $dataReady = false;
    }
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else {
        $email = "";
        $dataReady = false;
    }
    if (isset($_SESSION['type'])) {
        $type = $_SESSION['type'];
    } else {
        $type = "";
        $dataReady = false;
    }
    if (isset($_SESSION['salon'])) {
        $salon = $_SESSION['salon'];
    } else {
        $salon = "";
    }
    if (isset($_SESSION['podogrev'])) {
        $podogrev = $_SESSION['podogrev'];
    } else {
        $podogrev = "";
    }
    if (isset($_REQUEST["car"])) {
        $car = $_REQUEST["car"];
        $_SESSION['car']=$car;
    } else if (isset($_SESSION['car'])) {
        $car = $_SESSION['car'];
    } else {
        $car = "";
        $dataReady = false;
    }
    if (isset($_REQUEST["pred0"])) {
        $_SESSION['pred0'] = $_REQUEST["pred0"];
    } else {
        unset($_SESSION['pred0']);
    }
    if (isset($_REQUEST["pred1"])) {
        $_SESSION['pred1'] = $_REQUEST["pred1"];
    } else {
        unset($_SESSION['pred1']);
    }
    if (isset($_REQUEST["pred2"])) {
        $_SESSION['pred2'] = $_REQUEST["pred2"];
    } else {
        unset($_SESSION['pred2']);
    }
    if (isset($_REQUEST["day"])) {
        $day = $_REQUEST["day"];
        $_SESSION['day'] = $day;
    } else if (isset($_SESSION['day'])) {
        $day = $_SESSION['day'];
    } else {
        $day = 0;
    }
    if (isset($_REQUEST["uskor"])) {
        $uskor = $_REQUEST["uskor"];
        $_SESSION['uskor'] = $uskor;
    } else if (isset($_SESSION['uskor'])) {
        $uskor = $_SESSION['uskor'];
    } else {
        $uskor = "";
    }
} else {
   $login = "";
    $password = "";
    $dataReady = false;
}