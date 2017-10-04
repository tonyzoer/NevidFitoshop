  <?php
 $to = 'okamanahi@gmail.com';
 $subject = 'Замовлення';
 $content = $_POST;
 $body = '';
 for($i=1; $i < $content['itemCount'] + 1; $i++) {
     $name = 'item_name_'.$i;
     $quantity =  'item_quantity_'.$i;
     $price = 'item_price_'.$i;
     $body .= 'item #'.$i.': ';
     $body .= $content[$name].' '.$content[$quantity].' '.$content[$price];
     $body .= '<br>';
 }
 $headers = 'From: nevid@fitoshop.in.ua' . "\r\n" .
            'Reply-To: nevid@fitoshop.in.ua' . "\r\n" .
         '   X-Mailer: PHP/' . phpversion();
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 if(mail($to, $subject, $body, $headers)){
 echo "OK";
 }else {
    // Header('Location: index.html');
 }
 echo "$to";
 echo "$subject";
 echo "$body";
 echo "$headers";
 ?>
