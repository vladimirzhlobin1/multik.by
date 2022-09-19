<div id="block-category">

<p class="header-title">Категории товаров</p>

<ul>

<li><a id="index1"><img src="/images/swimming.png" id="mobile-images"/>Бассейны и аксессуары</a>
<ul class="category-section">
<li><a href="view_cat.php?type=swimmingpool"><strong id="strong_menu">Все товары</strong></a></li>

<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='swimmingpool'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>

</ul></li>



<li><a id="index2"><img src="/images/samokat.png" id="book-images"/>Самокаты(скейты)</a>
<ul class="category-section">
<li><a href="view_cat.php?type=scooter"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='scooter'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>
</li>



<li><a id="index3"><img src="/images/malish.png" id="table-images"/>Для малышей</a>
<ul class="category-section">
<li><a href="view_cat.php?type=forkids"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='forkids'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>




<li><a id="index4"><img src="/images/igrovie-nabori.png" id="igr-images"/>Игровые наборы</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Playing"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='Playing'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>



<li><a id="index5"><img src="/images/kuhni.jpg" id="igr-images"/>Детская мебель</a>
<ul class="category-section">
<li><a href="view_cat.php?type=mebel"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='mebel'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


<li><a id="index6"><img src="/images/playing.jpg" id="igr-images"/>Игровые наборы</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Playing"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='Playing'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


<li><a id="index7"><img src="/images/interactiv.jpg" id="igr-images"/>Интерактивные игрушки</a>
<ul class="category-section">
<li><a href="view_cat.php?type=interactive"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='interactive'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>



<li><a id="index8"><img src="/images/constructor.jpg" id="igr-images"/>Конструкторы</a>
<ul class="category-section">
<li><a href="view_cat.php?type=constructore"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='constructore'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


<li><a id="index9"><img src="/images/dolls.png" id="igr-images"/>Куклы и аксессуары</a>
<ul class="category-section">
<li><a href="view_cat.php?type=dolls"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='dolls'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


<li><a id="index10"><img src="/images/multherous.jpg" id="igr-images"/>Любимые герои</a>
<ul class="category-section">
<li><a href="view_cat.php?type=multherous"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='multherous'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


<li><a id="index11"><img src="/images/soft.jpg" id="igr-images"/>Мягкие игрушки</a>
<ul class="category-section">
<li><a href="view_cat.php?type=soft"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='soft'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


<li><a id="index12"><img src="/images/radio.jpg" id="igr-images"/>Радио-игрушки</a>
<ul class="category-section">
<li><a href="view_cat.php?type=radio"><strong id="strong_menu">Все товары</strong></a></li>
<?php

$result = mysqli_query($link,"SELECT * FROM category WHERE type='radio'");
  
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysqli_fetch_array($result));
} 
	
?>
</ul>

</li>


</ul>

</div>