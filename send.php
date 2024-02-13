<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "6196682255:AgyFb6Spp2pG9-sp-YTY1rW46aw1A";
$chat_id = "-1001921782058";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Товар: ' => 'Иригатор',
  'З сайту: ' => 'panel.universalshop.space/'
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: success.html');
} else {
  echo "Error";
}
?>

<?php

$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$country = 'UA';

$product_price = stripslashes(htmlspecialchars($_POST['s1']));
$product_id = stripslashes(htmlspecialchars($_POST['s2']));
$product_name = stripslashes(htmlspecialchars($_POST['s3']));


if (stripslashes(htmlspecialchars($_POST['country']))) {
    $country = stripslashes(htmlspecialchars($_POST['country']));
}

$subject = 'Заказ товара - ' . $product_name;
$addressat = "web.aape@gmail.com";

$success_url = "/form-ok.php?name=$name&phone=$phone&country=$country&product_price=$product_price&product_id=$product_id&product_name=$product_name&email=$email";
$message = "ФИО: {$name}\nКонтактный телефон: {$phone}";


$sendMail = mail($addressat, $subject, $message, "Content-type:text/plain;charset=utf-8\r\n");
if($sendMail){
    header('Location: ' . $success_url);
} else {
    echo '<h1 style="color:green;">Ошибка!</h1>';
}


exit;