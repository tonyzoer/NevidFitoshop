<?php
include 'dbconect.php';
$itemid=null;
// echo "Connected successfully";
if( $_GET["item"] ) {
// echo "good";
$itemid= $_GET["item"];
}else{
   // echo "fuck";
   exit();
}
$id=null;
$name=null;
$desc=null;
$descforuse=null;
$tableid=null;
$imgsrc=null;
$price=null;
$desccont=null;
$sql="SELECT * FROM products WHERE id={$itemid};";
// echo "<br>";
// echo $sql;
$result=$conn->query($sql);
if ($result->num_rows>0) {
   // echo "fuck yeeah";
   while ($row = $result->fetch_assoc()) {
      $id=$row['id'];
      $name=$row['name'];
      $desc=$row['desc'];
      $descforuse=$row['descForUse'];
      $tableid=$row['tableId'];
      $imgsrc=$row['imgsrc'];
      $price=$row['price'];
      $desccont=$row['descCont'];
      $imgdescsrc=$row['imgdescsrc'];
      $imgcontsrc=$row['imgcontsrc'];
      $imgusesrc=$row['imgusesrc'];
      $smalldesc=$row['smalldesc'];
   }
}else {
   echo "Sorry not found";
}
echo "<!DOCTYPE html>

<html>";
include 'headinclude.php';

echo "<head> <title>{$name}</title>
<meta charset='UTF-8'>
</head>
<body>
    <!-- Navigation bar -->
        <div class='navbar navbar-default navbar-fixed-top' role='navigation'>
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
                <a class='navbar-brand' href='../'>Fito Market</a>
            </div>
            <nav role='navigation' class='collapse navbar-collapse navbar-right'>
                <ul class='navbar-nav nav'>
                    <li class='active'><a href='../'>Главная</a></li>
                    <li class='dropdown'>
                        <a data-toggle='dropdown' href='allcategories.php' class='dropdown-toggle'>Категории <b class='caret'></b></a>
                        <ul class='dropdown-menu'>
                            <li class='active'><a href='#'>Item 1</a></li>
                            <li><a href='#'>Item 2</a></li>
                            <li><a href='#'>Item 3</a></li>
                            <li class='divider'></li>
                            <li><a href='allcategories.php'>Все Категории</a></li>
                        </ul>
                    </li>
                    <li><a href='allproducts.php'>Ассортимент</a></li>
                    <li><a href='../about.html'>О Нас</a></li>
                    <li><a href='../contacts.html'>Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Navigation bar -->";
    echo" <div class='jumbotron'>
        <div class='container simpleCart_shelfItem'>
            <div class='row' position='fixed'>
                <div class='col-md-6'>
                    <h4>Фіто чай: <h2 class='item_name'>${name}</h2></h4>
                    <img class='img-rounded img-responsive ' src='${imgsrc}'></img>
                </div>
                <div class='col-md-6 v-center'>
                    <div class='center-block'>
                    <span style='font-size:1em; text-align:center;'> ${smalldesc}
</span>
<br>
<span style='color:red;'>ЦІНА:</span>  <span class='item_price'>${price}</span>гривень
                    </br>
                    <a class=\"item_add btn btn-primary btn-lg\" href=\"javascript:;\"> Добавить в корзину </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <button type='button' class='btn btn-primary active' style='width:32.5%;' onclick='showDesc();'>Опис</button>
                    <button type='button' class='btn btn-primary ' style='width:32.5%;' onclick='showCont();'>Склад</button>
                    <button type='button' class='btn btn-primary ' style='width:32.5%;' onclick='showTerm();'>Спосіб вживання</button>
                </div>
            </div>
        </div>
        <div class='container'>
            <div id='desc'>
                <div class='row'>
                    <div class='col-md-12'>
                        <img src='${imgdescsrc}' alt='' class='img-rounded pull-right pading-right' height='30%' width='30%' style='right: 100%;'>
                        <h3><strong>ОПИС продукту:</strong></h3>
                        ${desc}

                    </div>
                </div>
            </div>
            <div id='contains' style='display:none;'>
                <div class='row'>
                    <div class='col-md-12'>
                        <img src='${imgcontsrc}' alt='' class='img-rounded pull-right pading-right' height='30%' width='30%' style='right: 100%;'>
                        <h3><strong>СКЛАД:</strong></h3>
                        ${desccont}
                    </div>
                </div>
            </div>
            <div id='termofuse' style='display:none;'>
                <div class='row'>
                    <div class='col-md-12'>
                        <img src='${imgusesrc}' alt='' class='img-rounded pull-right pading-right' height='30%' width='30%' style='right: 100%;'>
                        <h3><strong>ЗАСТОСУВАННЯ:</strong></h3>
                        ${descforuse}
                    </div>
                </div>
            </div>
        </div>
    </div>";
    include 'footerinclude.php';
echo"
</body>

</html>
";
 ?>
