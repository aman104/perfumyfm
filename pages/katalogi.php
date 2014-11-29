<div class="page-content">



    <div class="page-main">

        <?php echo renderBreadcrumbs($host, $page, $pages); ?>

<?php
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '
<a href="'.$host.'/files/catalog2013.pdf" style="margin-left: 140px;" class="cat1_ru cat_left">Каталог 2013 <br />Скачать PDF</a>
<a href="'.$host.'/files/plan_marketing_ru.pdf" style="margin-left: 45px;" class="cat2_ru cat_left">План маркетинга</a>
'; break;
        case 'en' :  echo '
<a href="'.$host.'/files/catalog-fragrance-2013.pdf" style="margin-left: 45px;" class="cat1_en cat_left">Catalog Fragrance 2013</a>
<a href="'.$host.'/files/catalog-makeup-2013.pdf" style="margin-left: 45px;" class="cat2_en cat_left">Catalog Makeup 2013</a>
<a href="'.$host.'/files/plan-marketingowy-my.pdf" style="margin-left: 45px;" class="cat3_en cat_left">Plan marketing</a>
'; break;
        case 'en2' :  echo '
<a href="http://www.indonesia.fmworld.com/download/marketing-plan-web-version.pdf" style="margin-left: 45px;" class="cat1_en2 cat_left">Marketing Plan</a>
<a href="http://www.indonesia.fmworld.com/download/katalog-july-2014.pdf" style="margin-left: 45px;" class="cat2_en2 cat_left">New Catalog 2014</a>
'; break;
default : echo '
<a href="http://cdn.fmgroup.pl/download/KATALOG_PERFUM_21.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat3_pl">Katalog produktów perfumeryjnych i pielęgnacyjnych FM GROUP Polska<br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/katalog_makeup.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat1_pl">Katalog produktów do makijażu FM GROUP MAKE UP <br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/FOR_HOME_nr_10.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat2_pl">Katalog chemii gospodarczej FM GROUP FOR HOME <br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/FM_GROUP_Moblie_[Przewodnik_6]_2014.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat4_pl">Przewodnik po ofercie FM GROUP Mobile <br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/Katalog_AURILE_1.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat5_pl">Katalog produktów Aurile nr 2 <br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/plan_marketingowy.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat6_pl">Plan Marketingowy FM GROUP <br />Pobierz pdf</a>
';
    }
?>


    </div>



    <?php include('pages/right.php'); ?>



</div>
