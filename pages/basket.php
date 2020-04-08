<?php
include 'session_basket.php';;
include 'auth.php';
$res = 0;
function send_mail($msg, $email)
{
	echo "<script>console.log('Debug Objec123ts: " . $msg . "' );</script>";
echo "<script>console.log('Debug Objec123ts: " . $email . "' );</script>";
    return mail($email, "Автосалон", $msg);
}

function write($msg)
{
    try {
        $handler = fopen("../".$_SESSION["login"].".txt", "w");
        fwrite($handler, $msg);
        fclose($handler);
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
<html>
<head>
    <title>Работа</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" background="../images/back_main.gif">
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
                </form>
            </div>
        </td>
    </tr>
    <tr>
        <td valign="top" width="583" height="338" bgcolor="#FFFFFF">
            <?php
            if (checkAuth($login, $password) && $dataReady) {
            ?>
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td valign="top" height="338" width="42"></td>
                    <td valign="top" height="338" width="492">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td width="492" valign="top" height="106">

                                    <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                        <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left">
                                        </div>
                                        <div style="margin-left:95px "><font class="title">Автосалон</font><br>


                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="492" valign="top" height="232">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <div valign="top" height="232" width="248">
                                                <div style="margin-left:6px; margin-top:2px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:6px; margin-top:7px; "><img
                                                            src="../images/1_w2.gif"></div>

                                            </div>
                                            <div style="margin-top:6px; margin-left:6px ">
                                                <table border="1px solid #7C994A" cellpadding="0" cellspacing="0"
                                                       border="0" align="center">
                                                    <tr>
                                                        <td>
                                                            <div>Имя</div>
                                                        </td>
                                                        <td colspan="3">
                                                            <div><?php echo $name; ?></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>Телефон</div>
                                                        </td>
                                                        <td colspan="3">
                                                            <div><?php echo $phone; ?></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>E-mail</div>
                                                        </td>
                                                        <td colspan="3">
                                                            <div><?php echo $email; ?></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>Тип услуги</div>
                                                        </td>
                                                        <td>
                                                            <div> <?php if (isset($_SESSION['type'])) {
                                                                    echo $m[$_SESSION['type']][0];
                                                                } ?> </div>
                                                        </td>
                                                        <td>
                                                            <div> <?php if (isset($_SESSION['type'])) {
                                                                    echo $m[$_SESSION['type']][1];
                                                                } ?></div>
                                                        </td>
                                                        <td>
                                                            <div><?php if (isset($_SESSION['type'])) {
                                                                    echo $m[$_SESSION['type']][2];
                                                                } ?></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>Марка машины</div>
                                                        </td>
                                                        <td>
                                                            <div><?php $c = (int)$car + 6 + (int)$type * 3;
                                                                echo $m[$c][0]; ?></div>
                                                        </td>
                                                        <td colspan="2">
                                                            <div><?php echo $m[$c][1];
                                                                $res += $m[$c][1];
                                                                ?> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <div>Дополнительные опции</div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    if (isset($_SESSION['salon'])) {
                                                        $res += $m[3][1];
                                                        ?>
                                                        <tr>
                                                            <td colspan="2">
                                                                <div>
                                                                    <?php echo $m[3][0] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <?php echo $m[3][1] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <?php echo $m[3][2] ?>
                                                                </div>
                                                            </td>
                                                        </tr> <?php } ?>
                                                    <?php
                                                    if (isset($_SESSION['podogrev'])) {
                                                        $res += $m[4][1];
                                                        ?>
                                                        <tr>
                                                            <td colspan="2">
                                                                <div>
                                                                    <?php echo $m[4][0] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <?php echo $m[4][1] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <?php echo $m[4][2] ?>
                                                                </div>
                                                            </td>
                                                        </tr> <?php } ?>
                                                    </tr>
                                                    <?php
                                                    if (isset($_SESSION['luk'])) {
                                                        $res += $m[5][1];
                                                        ?>
                                                        <tr>
                                                            <td colspan="2">
                                                                <div>
                                                                    <?php echo $m[5][0] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <?php echo $m[5][1] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <?php echo $m[5][2] ?>
                                                                </div>
                                                            </td>
                                                        </tr> <?php } ?>
                                                    <tr>
                                                        <td>
                                                            <div>Предварительная подготовка</div>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if (isset($_SESSION['pred0'])) {
                                                                echo "<div>" . $m[15 + 3 * (int)$type][0] . "</div>";
                                                            }
                                                            if (isset($_SESSION['pred1'])) {
                                                                echo "<div>" . $m[16 + 3 * (int)$type][0] . "</div>";
                                                            }
                                                            if (isset($_SESSION['pred2'])) {
                                                                echo "<div>" . $m[17 + 3 * (int)$type][0] . "</div>";
                                                            } ?>
                                                        </td>
                                                        <td colspan="2">
                                                            <?php
                                                            if (isset($_SESSION['pred0'])) {
                                                                $res += $m[15 + 3 * (int)$type][1];
                                                                echo "<div>" . $m[15 + 3 * (int)$type][1] . "</div>";
                                                            }
                                                            if (isset($_SESSION['pred1'])) {
                                                                $res += $m[16 + 3 * (int)$type][1];
                                                                echo "<div>" . $m[16 + 3 * (int)$type][1] . "</div>";
                                                            }
                                                            if (isset($_SESSION['pred2'])) {
                                                                $res += $m[17 + 3 * (int)$type][1];
                                                                echo "<div>" . $m[17 + 3 * (int)$type][1] . "</div>";
                                                            } ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <?php if ($type != 1) {
                                                            $res += $m[$type][1] * (int)$day; ?>
                                                            <td>
                                                                <div>Количество дней</div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div><?php echo $day; ?></div>
                                                            </td>
                                                        <?php } else { ?>
                                                            <td>
                                                                <div>Ускоренное оформление</div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div><?php if (isset($uskor)) {
                                                                        echo "выбрано";
                                                                        $res += $m[$type][1] * 2;
                                                                    } else {
                                                                        $res += $m[$type][1];
                                                                        echo "не выбрано";
                                                                    } ?></div>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            </div>


                                            <td valign="top" height="215" width="1" background="../images/tal.gif"
                                                style="background-repeat:repeat-y"></td>
                                            <td valign="top" height="215" width="243">
                                                <div style="margin-left:22px; margin-top:2px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; ">
                                                    <h4>Итоговая сумма:</h4>
                                                    <?php
                                                    echo $res;
                                                    ?> руб.
                                                    <br><br><br><br>
                                                    <div style="margin-left:67px; margin-top:7px; margin-right:10px ">
                                                        <img src="../images/pointer.gif"><a href="#"><img
                                                                    src="../images/read_more.gif" border="0"></a>
                                                    </div>
                                                </div>
                                                <div style="margin-left:22px; margin-top:16px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; "><img
                                                            src="../images/1_w4.gif"></div>
                                                <div style="margin-left:22px; margin-top:9px; ">
                                                </div>
                                                </div>

                                                <div style="margin-left:10px; margin-top:50px; margin-right:10px ">
                                                    <form method="POST">
                                                        <input type="submit" name="mail"
                                                               value="Отправить на почту"/>
                                                        <br><br>
                                                        <input type="submit" name="write" value="Записать в файл"/>
                                                    </form>
                                                    <?php

                                                    $msg = "Дата и время: " . date("d.m.y H:i") . "\nИмя: " . $name . "\nПочта: " . $email . "\nТип услуги: " . $m[$type][0] . "\nМарка машины: " . $m[$c][0] . "\nИтоговая сумма: " . $res;
                                                    if (isset($_REQUEST['mail'])) {
                                                        if (send_mail($msg, $email)) {
                                                            echo "Отправлено";
                                                        } else {
                                                            echo "Error";
                                                        }
                                                    } elseif (isset($_REQUEST['write'])) {
                                                        if (write($msg)) {
                                                            echo "Записано в файл";
                                                        } else {
                                                            echo "Error";
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                </div>
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
                <a><input value="Сменить пользователя" type="button"
                                             onclick="location.href='../index.php?clear=true'"/></a>

            </div>
        </td>
    </tr>
</table>
</body>
</html>
