<div class="page-right">

    <a class="button button_center button_jak_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/jakzarabiac.html"></a>

    

    <a class="button button_center button_ceny_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/rejestracja.html"></a>

    

    <a class="button button_center button_solaria_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/solaria.html"></a>

    

    <a class="button button_center button_pytania_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/kontakt.html"></a>

    

    <br />

    
    <?php 
    switch($_SESSION['lang'])
    {
        case 'ru' : echo '<h1>Образцы каталогов <br /><span>товаров</span></h1>'; break;
        case 'en' : echo '<h1>Samples of <br /> <span>catalogues</span></h1>'; break;
        default : echo '<h1>Przykładowe katalogi <span>Produktów</span></h1>';
    }
    ?>
    

    <?php if($_SESSION['lang'] == 'pl'): ?>
        <a href="<?php echo $host ?>/katalogi.html" style="height: 50px;" class="cat1_pl cat_center">
        pobierz pdf                                  
        </a>

        <a href="<?php echo $host ?>/katalogi.html" style="height: 50px;" class="cat2_pl cat_center">
        pobierz pdf                                  
        </a>
    <?php endif; ?>

    <?php if($_SESSION['lang'] == 'ru'): ?>
        <a href="<?php echo $host ?>/katalogi.html" style="height: 50px;" class="cat1_ru cat_center">
        скачать pdf                                  
        </a>

        <a href="<?php echo $host ?>/katalogi.html" style="height: 50px;" class="cat2_ru cat_center">
        скачать pdf                                  
        </a>
    <?php endif; ?>


    <?php if($_SESSION['lang'] == 'en'): ?>
        <a href="<?php echo $host ?>/katalogi.html" style="" class="cat1_en cat_center">
        download pdf                               
        </a>
        <a href="<?php echo $host ?>/katalogi.html" style="" class="cat2_en cat_center">
        download pdf                                 
        </a>
    <?php endif; ?>


    

</div>