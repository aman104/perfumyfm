<?php include('functions.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">



    <?php include('pages/header.php'); ?>

    
    <meta name="google-translate-customization" content="8e17c3421e2175fa-06911723b5970c58-gc84fc9c675fb90c5-18"></meta>
    <body>

        

        <div id="top" class="container">

            <a href="<?php echo $host ?>/" id="logo_<?php echo $_SESSION['lang'] ?>"></a>

            

            <div id="google_translate_element"></div> 

                <?php 
                    switch($_SESSION['lang'])
                    {
                        case 'ru' : echo '<h1>FM Group - Покупай по оптовых  <span>ценах</span><br />стань дистрибьютором  и  <span>зарабатывай </span> <br /> - дополнительная работа </h1>'; break;
                        case 'en' :
                        case 'en2' : echo '<h1>FM GROUP - Buy at  <span>wholesale</span> price <br /> become the distributor and <span>earn</span> - FM  perfumes'; break;
                        default : echo '<h1>FM Group - Kupuj po cenach <span>hurtowych</span><br />zostań dystrybutorem i <span>zarabiaj</span> - perfumy fm</h1>';
                    }
                ?>



            

        </div>

        

        <div id="menu" class="<?php echo ($is_home) ? '' : 'menu-page'; ?>">

            <div class="container">

                

                   <?php echo renderMenu($host, $page); ?>

                

            </div>

        </div>                

        

        <?php if($is_home): ?>

            <?php include('pages/home.php'); ?>

        <?php else: ?>

            <div class="page-bg"></div>

        <?php endif; ?>

        

        <div id="page-wrap" class="container">

            

            <?php include('pages.php'); ?>

            

            <div class="footer-bg"></div>

            

            <?php include('pages/footer.php'); ?>

   

        </div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: '<?php echo $_SESSION['lang']; ?>', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>         

    </body>

</html>    