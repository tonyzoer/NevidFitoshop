<?php
$to = 'nevid2006@rambler.ru';
$subject = 'Замовлення';
$content = $_POST;
$body = '';
$summary = 0;
for ($i = 0; $i < $content['itemCount']; $i++) {
    $name = 'item_name_' . $i;
    $quantity = 'item_quantity_' . $i;
    $price = 'item_price_' . $i;
    $sumprice = 'item_price_sum_' . $i;
    $body .= 'Продукт #' . ($i + 1) . ': ';
    $body .= $content[$name] . '."кількість: " ' . $content[$quantity] . '.ціна: ' . $content[$price] . "грн. Сума =" . ($content[$quantity] * $content[$price]) . "грн. ";
    $body .= '<br>';
    $summary += $content[$quantity] * $content[$price];
}
$body .= "Сумма до оплати : " . $summary."грн.";
$body .= '<br>';
$body .= "Ім'я: " . $content["name"] . "Телефон: " . $content["tel"] . " email: " . $content["email"];
$headers = 'From: nevid@fitoshop.in.ua' . "\r\n" .
    'Reply-To: nevid@fitoshop.in.ua' . "\r\n" .
    '   X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if (mail($to, $subject, $body, $headers)) {
    echo "OK";
    Header('Location: thankyou.php');
} else {
    Header('Location: sorry.php');
}
?>
