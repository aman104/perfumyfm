<div class="page-content">
    
    <div class="page-main">
         <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
<?php 
switch($_SESSION['lang'])
{
    case 'ru' : echo '
        <h3>Трудопровод мультик - МЛМ (MLM)</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/LxaJQcE9its" frameborder="0" allowfullscreen></iframe>        
        <br /><br />


        <h3>Первое Событие FM Group Россия</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/1wTcCysE80E" frameborder="0" allowfullscreen></iframe>        
        <br /><br />

        <h3>Трудопровод мультик - МЛМ (MLM)</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/enKOGuC83Uo" frameborder="0" allowfullscreen></iframe>        
        <br /><br />

'; break;
    case 'en' :
    case 'en2' :  echo '
        <h3>FM GROUP WORLD OF SUCCESS</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/Lufhury7mtQ" frameborder="0" allowfullscreen></iframe>        
        <br /><br />


        <h3>FM GROUP WORLD - BUSINESS OPPORTUNITY</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/ZHRZ5dZTWb4" frameborder="0" allowfullscreen></iframe>        
        <br /><br />

        <h3>NETWORK MARKETING - MLM GLOBAL BUSINESS OPPORTUNITY</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/dAzv3TEFYho" frameborder="0" allowfullscreen></iframe>        
        <br /><br />

'; break;
    default : echo '
        <h3>Film korporacyjny FM - przedstawia firmę FM GROUP</h3>        
        <iframe width="540" height="315" src="http://www.youtube.com/embed/DfQ1ErWfD1c" frameborder="0" allowfullscreen></iframe>
        <br /><br />
        
        
        <h3>Film z obchodów 6 Rocznicy FM GROUP - 25 września 2010 r. w Warszawie</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/AC_LolyoqdE" frameborder="0" allowfullscreen></iframe>
        <br /><br />
        
        <h3>Bajeczka o "Pablo i Bruno" przedstawiająca ideę MLM</h3>
        <iframe width="540" height="315" src="http://www.youtube.com/embed/X_FupKPta9E" frameborder="0" allowfullscreen></iframe>        
';
}
?>   


    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>