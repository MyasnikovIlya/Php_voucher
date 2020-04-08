<?php
$m[0] = array(0 => "прокат", 1 => 100, 2 => "Прокат на несколько дней");
$m[1] = array(0 => "продажа", 1 => 500, 2 => "Комиссионные услуги");
$m[2] = array(0 => "лизинг", 1 => 2100, 2 => "от 30 дней");
$m[3] = array(0 => "кожаный салон", 1 => 50, 2 => "натуральная кожа");
$m[4] = array(0 => "подогрев сидений", 1 => 30, 2 => "натуральная кожа");
$m[5] = array(0 => "люк", 1 => 100,2 => "полностью прозрачный");
$m[6] = array(0 => "Peugeot", 1 => 200);
$m[7] = array(0 => "Lada Priora ", 1 => 100);
$m[8] = array(0 => "Nissan", 1 => 300);
$m[9] = array(0 => "Citroen", 1 => 500);
$m[10] = array(0 => "Skoda", 1 => 300);
$m[11] = array(0 => "Lexus", 1 => 800);
$m[12] = array(0 => "Kia", 1 => 50);
$m[13] = array(0 => "Honda", 1 => 100);
$m[14] = array(0 => "Mazda", 1 => 80);
$m[15] = array(0 => "бензин", 1 => 50);
$m[16] = array(0 => "шины", 1 => 100);
$m[17] = array(0 => "омыватель", 1 => 200);
$m[18] = array(0 => "полировка", 1 => 100);
$m[19] = array(0 => "чистка салона", 1 => 50);
$m[20] = array(0 => "ТО", 1 => 200);
$m[21] = array(0 => "бензин", 1 => 50);
$m[22] = array(0 => "чистка салона", 1 => 200);
$m[23] = array(0 => "чистка двигателя", 1 => 100);
if (isset($_REQUEST["login"], $_REQUEST["password"])) {
    unset($_COOKIE['MYSESSID']);
}
if (isset($_COOKIE['MYSESSID'])){
    session_id($_COOKIE['MYSESSID']);
    session_start();
}
if (isset($_REQUEST["login"], $_REQUEST["password"]) 
        && $_REQUEST["login"] != "" || isset($_COOKIE['MYSESSID'])) {
    $login = $_REQUEST["login"] ?? $_SESSION['login'];
    $password = $_REQUEST["password"] ?? $_SESSION['password'];
    
    $token = "token-". $login;
    if (!isset($_COOKIE['MYSESSID'])){
        setcookie("MYSESSID", $token); 
        session_id($token);
        session_start();
    }
 
    
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['m'] = $m;
    if (isset($_SESSION['type'])) {
        $type = $_SESSION['type'];
    } else {
        $type = "";
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
    if (isset($_SESSION['luk'])) {
        $luk = $_SESSION['luk'];
    } else {
        $luk = "";
    }
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    } else {
        $name = "";
    }
    if (isset($_SESSION['phone'])) {
        $phone = $_SESSION['phone'];
    } else {
        $phone = "";
    }
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else {
        $email = "";
    }
} else {
    $login = "";
    $password = "";
}
