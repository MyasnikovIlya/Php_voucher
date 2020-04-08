<?php
include 'session_order.php';
include 'auth.php';
?>
<html>
<head>
    <title>Работа</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" background="../images/back_main.gif">
<form method="POST" action="bill.php">
    <table cellpadding="0" cellspacing="0" border="0" align="center" width="583" height="614">
        <tr>
            <td valign="top" width="583" height="208" background="../images/row1.gif">
                <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>
                <div style="margin-left:50px; margin-top:69px ">
                    <a href="../index.php">Главная<img src="../images/m1.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="20" height="10">
                    <a href="order.php">Заказ<img src="../images/m2.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="5" height="10">
                    <a href="basket.php">Корзина<img src="../images/m3.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="5" height="10">
                    <a href="index-3.php">О компании<img src="../images/m4.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="5" height="10">
                    <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0"></a>

                </div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="583" height="338" bgcolor="#FFFFFF">
                <?php
                if (checkAuth($login, $password)) {
                    ?>
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="402">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td valign="top" height="106">

                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif"
                                                                                   align="left">
                                                </div>
                                                <div style="margin-left:95px "><font class="title">Автосалон</font><br>
                                                    <div style="margin-left:200px"><h4>Тип услуги</h4>
                                                        <select name="type">
                                                            <option value=0 <?php if ($type == "0") echo "selected" ?>><?php echo $m[0][0] ?></option>
                                                            <option value=1 <?php if ($type == "1") echo "selected" ?>><?php echo $m[1][0] ?></option>
                                                            <option value=2 <?php if ($type == "2") echo "selected" ?>><?php echo $m[2][0] ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="492" valign="top" height="232">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td valign="top" height="232" width="248">
                                                        <div style="margin-left:6px; margin-top:2px; "><img
                                                                    src="../images/hl.gif"></div>
                                                        <div style="margin-left:6px; margin-top:7px; "><img
                                                                    src="../images/1_w2.gif"></div>


                                                        <div style="margin-top:10px; margin-left:6px ">
                                                            <h4>Дополнительные опции</h4>
                                                            <p><input name="salon" type="checkbox" value=3
                                                                    <?php if ($salon == 3) echo "checked" ?> /><?php echo $m[3][0] ?>
                                                            </p>
                                                            <p><input name="podogrev" type="checkbox"
                                                                      value=4 <?php if ($podogrev == 4) echo "checked" ?>/><?php echo $m[4][0] ?>
                                                            </p>
                                                            <p><input name="luk" type="checkbox"
                                                                      value=5 <?php if ($luk == 5) echo "checked" ?>/><?php echo $m[5][0] ?>
                                                            </p>
                                                        </div>


                                                    </td>


                                                    <td valign="top" height="215" width="1"
                                                        background="../images/tal.gif"
                                                        style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img
                                                                    src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img
                                                                    src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">
                                                            <h4>Контактные данные</h4>
                                                            Имя: <input type="text" name="name"
                                                                        value="<?php echo $name ?>">
                                                            <p>
                                                                E-mail: <input type="text" name="email"
                                                                               value="<?php echo $email ?>">
                                                            <p>
                                                                Телефон: <input type="text" name="phone"
                                                                                value="<?php echo $phone ?>">
                                                            <p>

                                                            <div style="margin-left:67px; margin-top:7px; margin-right:10px ">
                                                                <img src="../images/pointer.gif"><a href="#"><img
                                                                            src="../images/read_more.gif"
                                                                            border="0"></a>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img
                                                                    src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img
                                                                    src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">
                                                            <input type="submit" name="submit" value="Далее"/>

                                                        </div>
                                                        </div>

                                                        <div style="margin-left:0px; margin-top:7px; margin-right:10px ">
                                                            <img
                                                                    src="../images/pointer.gif"><a href="#"><img
                                                                        src="../images/read_more.gif" border="0"></a>
                                                        </div>


                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" height="338" width="49"></td>
                        </tr>
                    </table>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="583" height="68" background="../images/row3.gif">
                <div style="margin-left:51px; margin-top:31px ">
                    <a href="#"><img src="../images/p1.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="26" height="9">
                    <a href="#"><img src="../images/p2.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="30" height="9">
                    <a href="#"><img src="../images/p3.gif" border="0"></a>
                    <img src="../images/spacer.gif" width="149" height="9">
                    <a ><input name="clear" value="Сменить пользователя" type="button"
                        onclick="location.href='../index.php?clear=true'"/>
                    </a>
                </div>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
