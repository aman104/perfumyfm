

<div id="footer" class="container">    

    <img src="<?php echo $host ?>/img/logo_small.png" />

    <div class="terms">

        &copy; FM GROUP 

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo 'духи'; break;
            case 'en' :
            case 'en2' :  echo 'Perfume'; break;
            default : echo 'Perfumy';
        }
        ?>

         

        <br />

        

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo 'Все права защищены'; break;
            case 'en' :
            case 'en2' :  echo 'All rights reserved'; break;
            default : echo 'Wszelkie prawa zastrzeżone ';
        }
        ?>
        

    </div>

    <div class="phone">

        

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo 'Работа:'; break;
            case 'en' :
            case 'en2' :  echo ''; break;
            default : echo 'PRACA - ZADZWOŃ: ';
        }
        ?>

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo '<span class="pink"><a href="mailto:info@fmgroup-russia.ru">info@fmgroup-russia.ru</a></span>'; break;
            case 'en' : echo '<span class="pink"><a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a></span>';  break;
            case 'en2' : echo '<span class="pink"><a href="mailto:info@fmworld-indonesia.com">info@fmworld-indonesia.com</a></span>'; break;
            default : echo '<span class="pink">tel. 507 759 582</span>';
        }
        ?>

        

    </div>

</div>