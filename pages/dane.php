<div style="clear: both"></div>FM GROUP Manager <br />
<?php 
switch($_SESSION['lang'])	
{
	case 'ru' : echo 'Павел Шлебода'; break;
	case 'en' :
	case 'en2' : echo 'Paul Sleboda'; break;
	default: echo 'Paweł Śleboda';
}
?>
<br />
<?php if($_SESSION['lang'] == 'pl'): ?>
<span class="ico ico-phone">tel. 507 759 582 (Orange), 727 919 065 (FM GROUP Mobile)</span><br />
<?php endif; ?>
<span class="ico ico-email">
<?php 
switch($_SESSION['lang'])	
{
	case 'ru' : echo 'e-mail: <a href="mailto:info@fmgroup-russia.ru">info@fmgroup-russia.ru</a>'; break;
	case 'en' : echo 'e-mail: <a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a>'; break;
	case 'en2' : echo 'e-mail: <a href="mailto:info@fmworld-indonesia.com">info@fmworld-indonesia.com</a>'; break;
	default: echo 'e-mail: <a href="mailto:biuro@zarabiajnaperfumachfm.pl">biuro@zarabiajnaperfumachfm.pl</a>';
}	
?>
</span><br />
<?php 
switch($_SESSION['lang'])
{
    case 'ru' : echo 'Приглашаем Вас к сотрудничеству, предоставляем Вам свои знания и опыт.<br/>
Если у Вас есть вопросы, пишите или звоните'; break;
	case 'en' :
	case 'en2' : echo 'You are welcome to start the cooperation with us, where you receive our knowledge and experience. If you have questions, please feel free to write us.'; break;
    default : echo 'Zapraszamy do współpracy, służymy wiedzą i doświadczeniem. <br/>
Masz pytania napisz lub zadzwoń.';
}
?>
