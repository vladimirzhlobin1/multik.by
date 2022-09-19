<div id = "block-header">
<div id = "header-top-block">


<ul id="header-top-menu">
<li>Ваш город - <span> Жлобин</span></li>
<li><a href="o-nas.php">О Нас</a></li>
<li><a href="magaziny.php">Магазины</a></li>
<li><a href="feedback.php">Контакты</a></li>
</ul>


<p id="reg-auth-title" style="text-align: right;"><a class="top-auth">Вход</a><a href="registration.php">Регистрация</a></p>


<div id="block-top-auth">

<div class="corner"></div>
<form method="post">
<ul id="input-email-pass">

<h3>Вход</h3>

<p id="message-auth">Неверный логин и(или) пароль</p>
<li id="center-message-auth"><input type="text" id="auth_login" placeholder="Логин или E-mail"/></li>
<li id="center-message-auth1"><input type="password" id="auth_pass" placeholder="Пароль"/><span id="button-pass-show-hide" class="pass-show"></span></li>

<ul id="list-auth">
<li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">Запомнить меня</label></li>
<li><a id="remindpass" href="#">Забыли пароль?</a></li>
</ul>

<p style="text-align: right;" id="button-auth"><a>Вход</a></p>

<p style="text-align: right;" class="auth-loading"><img src="/images/loading.gif"/></p>


</ul>

</form>

</div>
</div>
<div id="top-line"></div>
<img id ="img-123" src="/images/Vizitka.png"/>
<div id="personal-info" style="text-align:right;">ЗВОНИТЕ ПО НОМЕРУ
<p style="text-align: right;"></p>
<h3 style="text-align: right;">+37533-650-15-06</h3>
<img src="/images/phone-icon.png"/>
<p style="text-align: right;">Режим работы</p>
<p style="text-align: right;">Звонки принимаются с 8:00 до 18:00</p>
<p style="text-align: right;">Заявки на сайте-круглосуточно</p>
<img  src="/images/time-icon.png"/>

</div>

<div id="block-search"> 
<form method="GET" action="search.php?q=" >
<span></span>
<input type="text" id="input-search" name="q" placeholder="Поиск среди более 5000 товаров" value="<?php echo $search; ?>"/>
<input type="submit" id="button-search" value="Поиск"/>

</form>

<ul id="result-search">


</ul>

</div>
</div>
<div id="top-menu">
<ul>
<li> <img src="/images/shop.png"/><a href="index.php">Главная</a> </li>
<li><img src="images/new-32.png"/><a href="view_aystopper.php?go=news">Новинки</a></li>
<li><img src="images/bestprice-32.png"/><a href="view_aystopper.php?go=leaders">Лидеры продаж</a></li>
<li><img src="images/sale-32.png"/><a href="view_aystopper.php?go=sale">Распродажа</a></li>
</ul>


<p style="text-align: right;" id="block-basket"><img src="/images/cart-icon.png"/><a href="cart.php?action=oneclick">Корзина пуста</a></p>
<div id="nav-line"></div>
</div>