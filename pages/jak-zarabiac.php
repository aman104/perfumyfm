<div class="page-content">

    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>

<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<h3>Как начать сотрудничество?</h3>'; break;
        default : echo '<h3>JAK ROZPOCZĄĆ WSPÓŁPRACĘ?</h3>';
    }
?>

<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<p>Для того, чтобы стать дистрибьютором FM Group, Вы должны достичь 18 лет, иметь спонсора, который введет Вас в систему-эту функцию выполняем мы, а также заполнить регистрационный бланк в закладке Регистрация, где предоставлена возможность покупки стартового пакета, который  является необязательным. Каждый клиент хочет ознакомиться с  запахом духов, которые желает приобрести, поэтому стоит иметь стартовый пакет. Мы предоставляем  3 вида стартовых комплектов, в состав которых входят кейс с 100, 150   или 20 пробниками духов, каталог парфюмерных средств для чистки, каталог косметики и другие маркетинговые материалы. Покупка стартового пакета является единственным капиталовложением.
        </p>'; break;
        default : echo '<p>Aby zostać dystrybutorem FM GROUP należy mieć ukończone 18 lat, mieć sponsora
            wprowadzającego, którym dla ciebie jesteśmy my, oraz wypełnić pozycję "rejestracja",
            a tam wykupić starter jeśli go chcesz, a warto ponieważ klienci chcą powąchać próbki perfum przed ich zakupem. 
            Posiadamy 2 rodzaje startera, w jego skład wchodzi piórnik z 150 szt. próbek perfum lub z 20 sztuk próbek perfum, 
            katalog perfumeryjny środków czystości, kosmetyków kolorowych oraz telefonii komórkowej, 
            a także inne materiały marketingowe. WYKUP STARTERA JEST JEDYNĄ INWESTYCJĄ!</p>';
    }
?>
        

        
        <br />

<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<h3>Как зарабатывать деньги?</h3>'; break;
        default : echo '<h3>JAK ZARABIAĆ ?</h3>';
    }
?>

<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '
        <p>Работая с фирмой FM, можно зарабатывать путем:
        <ul>
            <li>Прямые продажи- на разнице между ценой их покупки, а ценой в каталоге -даже 43% маржи</li>
            <li>Комиссионные в результате  маркетингового плана (напр. 17 шт. духов- это 300 баллов, т.е. 3% премии). Выплата для дистрибьютора начисляется путём умножения размера покупок (в баллах) на процентную стоимость.</li>
            
        </ul>
        '; break;
        default : echo '
        <p>Współpracując z firmą FM można zarabiać poprzez:
        <ul>
            <li>Sprzedaż bezpośrednią - na różnicy pomiędzy ceną zakupu a ceną katalogową - aż 43% marży</li>
            <li> Z prowizji wynikającej z planu marketingowego (np. 17 szt. perfum tj. 300 punktów=3procent
                prowizji) Wypłata dla dystrybutora wyliczana jest poprzez pomnożenie wielkości zakupów (w
                punktach) przez wartość procentową.</li>
            <li>Z dodatkowych programów motywacyjnych organizowanych przez: <br />
                <a href="http://www.fm-world.pl/programy_lidera_fm.htm">- FM GROUP World - nas jako Liderów FM</a>
            </li>
        </ul>
        ';
    }
?>
    </p>    
    <br />
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '
        <h3>Почему стоит стать Дистрибьютором?</h3>
        <ul>
            <li> Возможность  высоких заработков- сколько зарабатываете зависит только от Вас (на одном продукте зарабатываете 43%)</li>
                        <li> Вам не нужно делать больших капиталовложений. Чтобы начать собственное дело, Вы покупаете только Стартовый Комплект</li>
            <li> У Вас нет обязанности постоянных заказов</li>
            <li> Сотрудничество напрямую с производителем</li>
            <li> Чёткая система финансовой отчетности, возможность постоянного контроля своих доходов, а также работы своей группы на веб-сайте (благодаря уникальной компьютерной программе MLN Menager)</li>
            <li> Акции и скидки на приобретение продукции</li>
        </ul>
'; break;
        default : echo '
        <h3>DLACZEGO WARTO ZOSTAĆ DYSTRYBUTOREM?</h3>
        <ul>
            <li> możliwość osiągania wysokich zarobków - to ile zarabiasz zależy tylko od Ciebie (na jednym
                produkcie zarabiasz 43%)</li>
            <li> minimalny wkład własny - by rozpocząć współpracę, kupujesz jedynie starter</li>
            <li> nie ma obowiązku zamówień</li>
            <li> współpraca bezpośrednio z producentem</li>
            <li> przejrzysty system rozliczeń finansowych, możliwość stałego kontrolowania swoich zarobków na
                stronie internetowej (dzięki unikalnemu programowi MLM MENAGER)</li>
            <li> promocje i rabaty na zakup produktów</li>
        </ul>        
';
    }
?>
 <br />       
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<h3>Маркетинговый План</h3>'; break;
        default : echo '<h3>Plan Marketingowy</h3>';
    }
?> 
      
<?php 
    switch($_SESSION['lang'])
    {
	
	

	
	
        case 'ru' : echo '<p>Маркетинговый план очень прост и предоставляет возможность зарабатывать на комиссионных, подсчитанных на основе оборота спонсора и его группы. Баллы насчитываются в месячных циклах. Чтобы достичь определенный процентный уровень, дистрибьютор со своей группой должен набрать определенную сумму баллов в таблице. За каждый купленный продукт получаем баллы: 1балл = 10 рублей, которые потом пересчитываются на премию. </p>
На пример: сколько штук духов по цене в каталоге 990 рублей должен купить дистрибьютор со своей группой, чтобы достичь очередного процентного уровня. 
'; break;
        default : echo '<p> Plan Marketingowy jest bardzo prosty i daje możliwość zarabiania na prowizjach, obliczanych na podstawie obrotów sponsora i jego grupy. Punkty sumują się w cyklach miesięcznych. Aby osiągnąć dany poziom procentowy dystrybutor wraz ze swoją grupą musi zdobyć podaną w tabeli ilość punktów. Za każdy zakupiony produkt dostajemy punkty: 1 pkt. = 1 zł bez VAT, które później przeliczane są na prowizję. <br />
Dla przykładu podaję, ile sztuk perfum w cenie katalogowej 33,80 zł musi zakupić dystrybutor wraz ze swoją grupą, aby osiągnąć kolejny próg procentowy. </p>
';
    }
?>  

<br />
<table class="table_text">
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<tr>
        <th>Размер комиссии</th>
        <th>Количество баллов</th>
        <th>Количество духов (шт.)</th>
    </tr>'; break;
        default : echo '<tr>
        <th>Wielkość prowizji</th>
        <th>Ilość punktów</th>
        <th>Ilość perfum (szt.)</th>
    </tr>';
    }
?>     
        
    <tr>
        <td>3%</td>
        <td>300</td>
        <td>17</td>
    </tr>    
    <tr>
        <td>6%</td>
        <td>1200</td>
        <td>66</td>
    </tr>    
    <tr>
        <td>9%</td>
        <td>3600</td>
        <td>197</td>
    </tr> 
    <tr>
        <td>12%</td>
        <td>7200</td>
        <td>393</td>
    </tr> 
    <tr>
        <td>15%</td>
        <td>12000</td>
        <td>654</td>
    </tr> 
    <tr>
        <td>18%</td>
        <td>20400</td>
        <td>1112</td>
    </tr> 
    <tr>
        <td>21%</td>
        <td>30000</td>
        <td>1634</td>
    </tr> 
</table>
<br />
<p>
    <?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo 'Выплата для дистрибьютора и группы начисляется путём умножения  суммы покупок на процентную стоимость.'; break;
        default : echo 'Wypłata dla dystrybutora i grupy wyliczana jest poprzez pomnożenie wielkości zakupów (w punktach) przez wartość procentową. ';
    }
?> 

<br /><br />

<img src="<?php echo $host; ?>/images/plan1.jpg" />
<br /><br />
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo 'Лучшим решением является создание такой сети продаж, чтобы ежедневно Вы были в состоянии работать с каждым человеком. Таким образом, построенная сеть дает возможность гармоничного сотрудничества и  увеличения прибыли. Создавая свою собственную дистрибьюторскую сеть, помните и о других. Оставьте им возможность, которую вы также использовали.'; break;
        default : echo 'Najlepszym rozwiązaniem jest zbudowanie takiej sieci sprzedaży, abyś na co dzień był w stanie współpracować z każdą z osób. Tak zbudowana sieć umożliwia harmonijną współpracę oraz przynosi rosnące zyski. Budując swoją sieć, pamiętaj o innych. Pozostaw im możliwość, z której Ty także skorzystałeś.';
    }
?> 



<br /><br />

<img src="<?php echo $host; ?>/images/drugi.jpg" />
<br /><br />
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo 'Создайте свою собственную дистрибьюторскую сеть, так чтобы другие имели такую же возможность. Это решение сделает Вашу работу более эффективной и позволит получать больше доходов'; break;
        default : echo 'Zbuduj swoją sieć tak, aby inne osoby miały szansę na zrobienie tego samego. Takie rozwiązanie sprawi, że Wasza praca będzie bardziej efektywna i przyniesie większe dochody.';
    }
?> 

<br /><br />
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<strong>Возможности сотрудничества с FM Group:</strong>'; break;
        default : echo '<strong>Współpraca z nami może odbywać się jako:</strong>';
    }
?> 
<br />
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '
<ul>
    <li><strong>Дополнительная работа</strong> - Вы можете подзаработать дополнительные деньги</li>
    <li><strong>Постоянная работа</strong> - Вы занимаетесь только работой с нами, создавая свою собственную дистрибьюторскую сеть МЛМ или/и продажей товаров</li>
</ul>
'; break;
        default : echo '
<ul>
    <li><strong>Praca dodatkowa</strong> - dzięki temu osiągniesz dodatkowy zarobek do swojej pensji,</li>
    <li><strong>Praca na tzw. "cały etat"</strong> - angażujesz się tylko w pracę z nami poprzez budowanie swojej grupy dystrybutorów MLM lub/i sprzedaż produktów. </li>
</ul>
';
    }
?> 

<br /><br />
</p>
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<h3>Как приобрести продукцию FM, являясь дистрибьютором?</h3>'; break;
        default : echo '<h3>Jak zakupić produkty FM będąc dystrybutorem?</h3>';
    }
?> 

<p>
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<ul>
        <li>Непосредственно- в офисе компании в городе Wrocław</li>
        <li>Доставка курьером- через фирму GLS</li>
    </ul>'; break;
        default : echo '<ul>
        <li>Bezpośrednio - w siedzibie firmy we Wrocławiu</li>
        <li>Wysyłkowo - za pośrednictwem firmy GLS. </li>
    </ul>';
    }
?> 
<br /> 
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo 'Стоимость доставки:'; break;
        default : echo 'Koszt wysyłki:';
    }
?>     
<br />  
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '
<ul>
<li>Заказ до 141zł- 18zł</li>
<li>од 141zł до 237zł -толко 7zł</li>
<li>од 237zł расходы покрываются FM Group Польша</li>
</ul>
'; break;
        default : echo '
<ul>
    <li>zamówienie do 141 zł - 18 zł</li>
<li>od 141 zł do 237 zł - TYLKO 7 zł</li>
<li>od 237 zł - koszty pokrywa FM Group Polska.</li>
</ul>        
';
    }
?> 
<br />
<?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo 'Также есть возможность групповых заказов. Компания покрывает расxоды на доставку, даже если на один адрес доставки пойдет групповой заказ на сумму минимум 237zł '; break;
        default : echo 'Istnieje również możliwość składania zamówień grupowych. Również w tym przypadku, jeśli pod jeden adres trafi zamówienie na minimum 237 zł, koszty przesyłki pokrywa firma.';
    }
?>   


</p>            
<br /><br />
<?php include('pages/dane.php'); ?>
        
        </p>

    </div>

    <?php include('pages/right.php'); ?>

</div>