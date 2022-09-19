<?php

   include("include/db_connect.php");
   include("functions/functions.php");
   //session_start();
   include("include/auth_cookie.php");
   
$search = clear_string($_GET["q"]);
   
$sorting = $_GET["sort"];   
 
switch ($sorting)
{
    case 'price-asc';
    $sorting = 'price ASC';
    $sort_name = 'От дешевых к дорогим';
    break;

    case 'price-desc';
    $sorting = 'price DESC';
    $sort_name = 'От дорогих к дешевым';
    break;
    
    case 'popular';
    $sorting = 'count DESC';
    $sort_name = 'Популярное';
    break;
    
    case 'news';
    $sorting = 'datetime DESC';
    $sort_name = 'Новинки';
    break;
    
    case 'brand';
    $sorting = 'brand';
    $sort_name = 'Новинки';
    break;
    
    default:
    $sorting = 'products_id DESC';
    $sort_name = 'Нет сортировки';
    break;                           
} 
   
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script> 
    <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script> 
    <script type="text/javascript" src="/js/shop-script.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="/trackbar/jquery.trackbar.js"></script>
	  <script type="text/javascript" src="/js/TextChange.js"></script>
    
	<title>Поиск - <?php echo $search; ?></title>
</head>
<body>
<div id="block-body">
<?php	
    include("include/block-header.php");    
?>
<div id="block-right">
<?php	
    include("include/block-category.php");  
    include("include/block-parameter.php");  
    include("include/block-news.php"); 
?>
</div>
<div id="block-content">

<?php
	
  if (strlen($search) >= 3 && strlen($search) < 150) 
  {    

	$num = 12; // Здесь указываем сколько хотим выводить товаров.
    $page = (int)$_GET['page'];              
    
	$count = mysqli_query($link,"SELECT COUNT(*) FROM table_products WHERE title LIKE '%$search%' AND visible = '1'");
    $temp = mysqli_fetch_array($count);

	if ($temp[0] > 0)
	{  
	$tempcount = $temp[0];

	// Находим общее число страниц
	$total = (($tempcount - 1) / $num) + 1;
	$total =  intval($total);

	$page = intval($page);

	if(empty($page) or $page < 0) $page = 1;  
       
	if($page > $total) $page = $total;
	 
	// Вычисляем начиная с какого номера
    // следует выводить товары 
	$start = $page * $num - $num;

	$qury_start_num = " LIMIT $start, $num"; 
	}

If ($temp[0] > 0)
{
    
 echo '
 
 <div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php" >Главная страница</a> \ <span>Поиск</span></p>
<ul id="options-list">
<li>Вид: </li>
<li><img id="style-grid" src="/images/icon-grid.png" /></li>
<li><img id="style-list" src="/images/icon-list.png" /></li>
<li>Сортировать:</li>
<li><a id="select-sort">'.$sort_name.'</a>
<ul id="sorting-list">
<li><a href="index.php?sort=price-asc" >От дешевых к дорогим</a></li>
<li><a href="index.php?sort=price-desc" >От дорогих к дешевым</a></li>
<li><a href="index.php?sort=popular" >Популярное</a></li>
<li><a href="index.php?sort=news" >Новинки</a></li>
<li><a href="index.php?sort=brand" >От А до Я</a></li>
</ul>
</li>
</ul>
</div>
<ul id="block-tovar-grid" > 
 ';   
    
	
  $result = mysqli_query($link,"SELECT * FROM table_products WHERE title LIKE '%$search%' AND visible='1' ORDER BY $sorting $qury_start_num ");  

if (mysqli_num_rows($result) > 0)
{
 $row = mysqli_fetch_array($result); 
 
 do
 {

if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
$img_path = './uploads_images/'.$row["image"];
$max_width = 200; 
$max_height = 200; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "/images/no-image.png";
$width = 110;
$height = 200;
} 
  
  echo '
  
  <li>
  <div class="block-images-grid" >
  <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
  </div>
  <p class="style-title-grid" ><a href="view_content.php?id'.$row["products_id"].'">'.$row["title"].'</a></p>
  <ul class="reviews-and-counts-grid">
  <li><img src="/images/eye-icon.png" /><p>0</p></li>
  <li><img src="/images/comment-icon.png" /><p>0</p></li>
  </ul>
  <a class="add-cart-style-grid" ></a>
  <p class="style-price-grid" ><strong>'.$row["price"].'</strong> руб.</p>
  <div class="mini-features" >
  '.$row["mini_features"].'
  </div>
  </li>
  
  ';
  
    
 }
    while ($row = mysqli_fetch_array($result));
}    


?>
</ul>


<ul id="block-tovar-list" >

<?php
	
  $result = mysqli_query($link,"SELECT * FROM table_products WHERE title LIKE '%$search%' AND visible='1' ORDER BY $sorting $qury_start_num");  

if (mysqli_num_rows($result) > 0)
{
 $row = mysqli_fetch_array($result); 
 
 do
 {

if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
$img_path = './uploads_images/'.$row["image"];
$max_width = 150; 
$max_height = 150; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "/images/noimages80x70.png";
$width = 80;
$height = 70;
} 
  
  echo '
  
  <li>
  <div class="block-images-list" >
  <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
  </div>

  <ul class="reviews-and-counts-list">
  <li><img src="/images/eye-icon.png" /><p>0</p></li>
  <li><img src="/images/comment-icon.png" /><p>0</p></li>
  </ul>
  
  <p class="style-title-list" ><a href="view_content.php?id'.$row["products_id"].'" >'.$row["title"].'</a></p>
  
  <a class="add-cart-style-list" ></a>
  <p class="style-price-list" ><strong>'.$row["price"].'</strong> руб.</p>
  <div class="style-text-list" >
  '.$row["mini_description"].'
  </div>
  </li>
  
  ';
  
    
 }
    while ($row = mysqli_fetch_array($result));
}    

echo '</ul>';

if ($page != 1){ $pstr_prev = '<li><a class="pstr-prev" href="search.php?q='.$search.'&?page='.($page - 1).'">&lt;</a></li>';}
if ($page != $total) $pstr_next = '<li><a class="pstr-next" href="search.php?q='.$search.'&page='.($page + 1).'">&gt;</a></li>';


// Формируем ссылки со страницами
if($page - 5 > 0) $page5left = '<li><a href="search.php?q='.$search.'&page='.($page - 5).'">'.($page - 5).'</a></li>';
if($page - 4 > 0) $page4left = '<li><a href="search.php?q='.$search.'&page='.($page - 4).'">'.($page - 4).'</a></li>';
if($page - 3 > 0) $page3left = '<li><a href="search.php?q='.$search.'&page='.($page - 3).'">'.($page - 3).'</a></li>';
if($page - 2 > 0) $page2left = '<li><a href="search.php?q='.$search.'&page='.($page - 2).'">'.($page - 2).'</a></li>';
if($page - 1 > 0) $page1left = '<li><a href="search.php?q='.$search.'&page='.($page - 1).'">'.($page - 1).'</a></li>';

if($page + 5 <= $total) $page5right = '<li><a href="search.php?q='.$search.'&page='.($page + 5).'">'.($page + 5).'</a></li>';
if($page + 4 <= $total) $page4right = '<li><a href="search.php?q='.$search.'&page='.($page + 4).'">'.($page + 4).'</a></li>';
if($page + 3 <= $total) $page3right = '<li><a href="search.php?q='.$search.'&page='.($page + 3).'">'.($page + 3).'</a></li>';
if($page + 2 <= $total) $page2right = '<li><a href="search.php?q='.$search.'&page='.($page + 2).'">'.($page + 2).'</a></li>';
if($page + 1 <= $total) $page1right = '<li><a href="search.php?q='.$search.'&page='.($page + 1).'">'.($page + 1).'</a></li>';


if ($page+5 < $total)
{
    $strtotal = '<li><p class="nav-point">...</p></li><li><a href="search.php?q='.$search.'&page='.$total.'">'.$total.'</a></li>';
}else
{
    $strtotal = ""; 
}

if ($total > 1)
{
    echo '
    <div class="pstrnav">
    <ul>
    ';
    echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left."<li><a class='pstr-active' href='search.php?q=".$search."&page=".$page."'>".$page."</a></li>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$pstr_next;
    echo '
    </ul>
    </div>
    ';
}

}else
{
    echo "<p>Ничего не найдено!</p>";
}
  }else
  {
     echo "<p>Поисковое значение должно быть от 3 до 150 символов!</p>";
  }
?>



</div>

<?php	
    include("include/block-footer.php");    
?>
</div>

</body>
</html>