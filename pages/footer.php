

<div id="footer" class="container">    

    <img src="<?php echo $host ?>/img/logo_small.png" />

    <div class="terms">

        &copy; FM GROUP 

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo 'духи'; break;
            case 'en' : echo 'Perfume'; break;
            default : echo 'Perfumy';
        }
        ?>

         

        <br />

        

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo 'Все права защищены'; break;
            case 'en' : echo 'All rights reserved'; break;
            default : echo 'Wszelkie prawa zastrzeżone ';
        }
        ?>
        

    </div>

    <div class="phone">

        

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo 'Работа:'; break;
            case 'en' : echo ''; break;
            default : echo 'PRACA - ZADZWOŃ: ';
        }
        ?>

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo '<span class="pink"><a href="mailto:info@fmgroup-world.ru">info@fmgroup-world.ru</a></span>'; break;
            case 'en' : echo '<span class="pink"><a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a></span>';  break;
            default : echo '<span class="pink">tel. 507 759 582</span>';
        }
        ?>

        

    </div>

</div>