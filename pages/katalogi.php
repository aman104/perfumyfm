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
        case 'en' : echo '
<a href="'.$host.'/files/catalog-fragrance-2013.pdf" style="margin-left: 45px;" class="cat1_en cat_left">Catalog Fragrance 2013</a>
<a href="'.$host.'/files/catalog-makeup-2013.pdf" style="margin-left: 45px;" class="cat2_en cat_left">Catalog Makeup 2013</a>
<a href="'.$host.'/files/plan-marketingowy-my.pdf" style="margin-left: 45px;" class="cat3_en cat_left">Plan marketing</a>
'; break;
default : echo '
<a href="http://cdn.fmgroup.pl/download/katalog_makeup_7.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat3_pl">Katalog MAKEUP 7 <br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/KATALOG_PERFUMY_wiosna_2013.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat1_pl">Katalog PERFUMY WIOSNA 2013 <br />Pobierz pdf</a>
<a href="http://cdn.fmgroup.pl/download/katalog_for_home_8.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat2_pl">Katalog FOR HOME 8.pdf <br />Pobierz pdf</a>
<a href="'.$host.'/files/plan_marketingowy_pl.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat3_en cat_left">Plan marketingowy</a>
<a href="'.$host.'/files/Katalog_AURILE_1.pdf" style="height: auto;margin-left: 45px; float: left;" class="cat4_pl cat_left">Katalog AURILE</a>
';
    }
?>         

         
    </div>



    <?php include('pages/right.php'); ?>



</div>