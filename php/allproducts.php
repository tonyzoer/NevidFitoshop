<?php
include 'dbconect.php';
$id=array();
$name=array();
$desc=array();
$descforuse=array();
$tableid=array();
$imgsrc=array();
$price=array();
$desccont=array();
$sql=null;
if( $_GET["category"] ) {
  // echo"biiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiitch!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
  $category=$_GET["category"];
$sql="SELECT *
FROM products
JOIN products_productsType ON id = productId
WHERE productTypeId =$category";
}else{
$sql="SELECT * FROM products;";
}
// echo "<br>";
// echo $sql;
$result=$conn->query($sql);
$i=0;
if ($result->num_rows>0) {
   // echo "fuck yeeah";
   while ($row = $result->fetch_assoc()) {
      $id[]=$row['id'];
      $name[]=$row['name'];
      $desc[]=$row['desc'];
      $descforuse[]=$row['descForUse'];
      $tableid[]=$row['tableId'];
      $imgsrc[]=$row['imgsrc'];
      $price[]=$row['price'];
      $desccont[]=$row['descCont'];
      $imgdescsrc[]=$row['imgdescsrc'];
      $imgcontsrc[]=$row['imgcontsrc'];
      $imgusesrc[]=$row['imgusesrc'];
      $smalldesc[]=$row['smalldesc'];
      $i++;
   }
}else {
   echo "Sorry not found";
}
echo "<!DOCTYPE html>
<html>";
include 'headinclude.php';
  echo "<body>
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
    </div><!-- End Navigation bar -->

    <div class='jumbotron'>
    <div class='container thumbs'>
      <div class='row row-eq-height'>";
      for ($z=0; $z <count($id) ; $z++) {
        echo "<div class='col-sm-12 col-md-12 fixed-max-high'>
                <div class='thumbnail'>
                  <img src='";
                   echo $imgsrc[$z];
                   echo "' alt=''  style='float:left;height:300px;' class='img-responsive'>
                  <div class='caption'>
                    <h3 class=''>";
                    echo $name[$z];
                    echo "</h3>
                    <p>";
                    echo $smalldesc[$z];
                    echo"</p>
                    <div class='btn-toolbar text-center'>
                    <div class='price  pull-left bottomleft' style='color:red;'>";
                    echo $price[$z];
                    echo " UAH </div>
                      <a href='item.php?item=";
                      echo $id[$z];
                      echo "' role='button' class='btn btn-primary bottomright'>Більше інформації</a>
                    </div>
                  </div>
                </div>
              </div>";
      }
      echo "</div>
      </div>
    </div><!-- End Thumbnails -->";
    include 'footerinclude.php';
    echo"
    <script>
    $( document ).ready(function() {
    var heights = $(\".fixed-max-high\").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);
    // console.log(heights);
    $(\".fixed-max-high\").css(\"min-height\",maxHeight+'px');
});</script>
  </body>
</html>
";
?>
