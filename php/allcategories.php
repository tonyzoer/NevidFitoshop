<?php
include 'dbconect.php';
$page=1;
if( $_GET["page"] ) {
// echo "good";
$page= $_GET["page"];
}
$offset=($page-1)*12;
$sql="SELECT * FROM productTypes LIMIT 12 OFFSET $offset;";
$result=$conn->query($sql);
$id=array();
$type=array();
$img=array();
if ($result->num_rows>0) {
   // echo "fuck yeeah";
   while ($row = $result->fetch_assoc()) {
      $id[]=$row['id'];
      $type[]=$row['type'];
      $img[]=$row['imgsrc'];
   }
}else {
   echo "Sorry not found";
}
// for ($i=0; $i <count($id) ; $i++) {
//   echo $type[$i];
// }
echo "<!DOCTYPE html>
<html>";
include 'headinclude.php';
echo"
<head>
  <title>Все Категории</title>
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
    </div><!-- End Navigation bar -->

  <div class='jumbotron'>
    <div class='container'>
    <h1 class='center_text'>Всі Категорії</h1>
    <div class='row'>";
    for ($i=0; $i <count($img) ; $i++) {
    echo"  <div class='col-md-3 ' style='pading:0px;'>
  <div class='thumbnail category' style='position:relative'>
        <img class='category img-responsive' src='$img[$i]'alt=''>
          <a href='allproducts.php?category=$id[$i]' class='link'>$type[$i]</a>

          </div>
      </div>";
    }
  echo" </div>
    </div>
  </div>";
  include 'footerinclude.php';
  echo"
  <script src='../js/gistfile1.js'></script>
  </body>
</html>
";
 ?>
