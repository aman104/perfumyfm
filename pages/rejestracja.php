

<div class="page-content">
    
    <div class="page-main">
         <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
        <?php if($msg): ?>
        <div class="msg msg_<?php echo $msg_class; ?>">
            <?php echo $msg; ?>
        </div>
        <?php endif; ?>
        

        <?php 
            switch($_SESSION['lang'])
            {
                case 'ru' : echo '<h2>Регистрация</h2>'; break;
                case 'en' : echo '<h2>Registration</h2>'; break;                
                default : echo '<h2>Rejestracja</h2>';
            }
        ?>

        <?php include('pages/langs/rejestracja_'.$_SESSION['lang'].'.php'); ?>

        
        
        
        <br />
        

        
    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>