
<script type="text/javascript">
$(document).ready(function() {
	    $('#blocktrackbar').trackbar({
	onMove : function() {
    document.getElementById("start-price").value = this.leftValue;
	document.getElementById("end-price").value = this.rightValue;	
	},
    width : 160,
	leftLimit : 10,
	leftValue : <?php
	if ((int)$_GET["start_price"] >=10 AND (int)$_GET["start_price"]<=3000)
    {
        
        echo (int)$_GET["start_price"];
    }else{
        echo "10";
    }
?>,
    rightLimit : 3000,
	rightValue : <?php
	if ((int)$_GET["end_price"] >=10 AND (int)$_GET["end_price"]<=3000)
    {
        
        echo (int)$_GET["end_price"];
    }else{
        echo "10";
    }
?>,
    roundUp : 5
    });
    });
    </script>
<div id="block-parameter">

<p class="header-title">Поиск по параметрам</p>
<p class="title-filter">Стоимость</p>
<form method="GET" action="search_filter.php">

<div id="block-input-price">
<ul>
<li><p>От</p></li>

<li><input type="text" id="start-price" name="start_price" value="5"/></li>
<li><p>До</p></li>
<li><input type="text" id="end-price" name="end_price" value="5000"/></li>
<li><p>руб</p></li>
</ul>
</div>
<div id="blocktrackbar"></div>
<p class="title-filter">Производители</p>
<ul class="checkbox-brand">
<?php
$result=mysqli_query($link,"SELECT * FROM category WHERE type='swimmingpool'");
if (mysqli_num_rows($result) > 0)
{
    
$row = mysqli_fetch_array ($result);
do
{
 $checked_brand="";   
if ($_GET["brand"])
{
    if (in_array($row["id"],$_GET["brand"]))
    {
        $checked_brand="checked";
        
    }
}    
    
echo '
<li><input '.$checked_brand.' type="checkbox"name="brand[]" value="'.$row["id"].'" id="checkbrend'.$row["id"].'" /><label for="checkbrend'.$row["id"].'">'.$row["brand"].'</label></li>
' ;   
}
while ($row = mysqli_fetch_array ($result));	
} 
?>



</ul>
<div style="text-align: center;"><input type="submit" name="submit" id="button-param-search" value=" "/></div>
</form>
</div>