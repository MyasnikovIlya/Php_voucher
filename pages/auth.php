<?php
function checkAuth($login, $password) {
    // реализовал мульти сессии (мне захотелось)
    // чтобы протестировать нужно заменить активную строчку кода 
    // строчкой из комментария ниже
    //return $login != "" && $password != "";
    return $login == "admin" && $password == "123";
}


