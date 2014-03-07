<div class="page-content">
    
    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
        <?php 
            switch($_SESSION['lang'])
            {
                case 'ru' : echo '
<p>
Зарегистрируйтесь и приобретайте продукты FM Group по дистрибьюторским ценам, без необходимости покупки стартового пакета - как дистрибьютор <span style="color: #A00040">получатель</span>.
<br /><br />
Тогда Вы можете заказать высококачественные потребительские товары для себя, семьи и друзей в очень хорошей цене, даже <span style="color: #A00040">43% дешевле</span>, но без возможности создания структуры группы и получения дополнительной премии с оборота группы.
<br /><br />
Мы рекомендуем!
<br /><br />
Действительно стоит зарегистрироватся!
<br /><br />
</p>
'; break;
                default : echo '
<p>
Zarejestruj się i kupuj produkty FM Group w cenach dystrybutora bez konieczności zakupu startera -
jako dystrybutor <span style="color: #A00040">odbiorca!</span>
<br /><br />
Wtedy wysokiej klasy produkty codziennego użytku zamawiaj dla siebie, rodziny i znajomych w
bardzo dobrej cenie aż o <span style="color: #A00040">43% TANIEJ</span>, ale bez możliwości budowania struktury grupy.
<br /><br />

<a href="http://perfumy.fm/files/2012/docs/katalog_perfumeryjny_nr16.pdf" style="margin-left: 20px; float: left;" class="cat9">Katalog produktów 16 <br />Pobierz pdf</a>
<a href="ftp://ftp.fmworld.com/katalog_makeup_5.pdf" style="float: left;" class="cat10">Katalog MAKE UP 5 <br />Pobierz pdf</a>
<a href="ftp://ftp.fmworld.com/FM_GROUP_Mobile_przewodnik.pdf" style="margin-left: 20px; float: left;" class="cat11">Przewodnik FM Group Mobile 2012 <br />Pobierz pdf</a>

<br /><br />

<div style="clear: both;"></div>
<br /><br />
<span style="color: #A00040">Nie ma obowiązku zamawiania towaru co miesiąc.</span>
<br /><br />
Jeśli jednak nie złożysz zamówienia przez 12 miesięcy, twoja umowa wygaśnie i konieczna będzie ponowna rejestracja.<br />
Polecam!
<br /><br />
Naprawdę warto!
<br /><br />
</p>
';
            }
        ?>
<br />
<a class="button button_center button_ceny_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/rejestracja.html"></a>        
        
<br /><br />
		<?php include('pages/dane.php'); ?>


    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>        