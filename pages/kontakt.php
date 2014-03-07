<?php
    $msg = false;
    $msg_class = 'error';
    if(isset($_POST['one_phone']))
    {
        $content = 'Osoba z nr telefonu: '.$_POST['one_phone'].' chce się z Tobą skontaktować';
        sendMail('Zgłoszenie kontaktowe', $content, 'oddzwonimy@perfumyfm.pl');
		sendMail('Zgłoszenie kontaktowe', $content, 'oddzwonimy@perfumyfm.pl', 'berti75@interia.pl');
        $msg = 'Zgłoszenie zostało wysłane';

        switch($_SESSION['lang'])
        {
            case 'ru' :  $msg = 'Ваш запрос уже отправлен'; break;
            case 'en' : $msg = 'The report has been sent'; break;
            default : $msg = 'Zgłoszenie zostało wysłane'; break;
        }

        $msg_class = 'notice';
    }   
    
    $require_msg = array();      
    
    if(isset($_POST['contact']))
    {
        $require = array('name', 'email', 'phone', 'text');
        
        $is_true = true;
        foreach($require as $one)
        {            
            if(!isset($_POST[$one]) || empty($_POST[$one]))
            {
               switch($_SESSION['lang'])
                {
                    case 'ru' :  $require_msg[$one] = 'Обязательные поля'; break;
                    case 'en' :  $require_msg[$one] = 'Required fields'; break;
                    default : $require_msg[$one] = 'Pole wymagane'; break;
                }
               $is_true = false;
            }
        }
        
        if(isset($_POST['email']) && !empty($_POST[$one]))
        {
            if(!check_email($_POST['email']))
            {

                switch($_SESSION['lang'])
                {
                    case 'ru' : $require_msg['email'] = 'E-mail адрес, который Вы ввели - неправильный'; break;
                    case 'ru' : $require_msg['email'] = 'You have entered incorrect e-mail address'; break;
                    default : $require_msg['email'] = 'Podałeś błędny adres e-mail'; break;
                }

                
                $is_true = false;
            }
        }
        
        if($is_true)
        {
            $content = 'Imie i nazwisko: '.$_POST['name'].'<br />';
            $content .= 'Adres e-mail: '.$_POST['email'].'<br />';
            $content .= 'Telefon: '.$_POST['phone'].'<br /><br />';
            $content .= $_POST['text'];
            sendMail('Zgłoszenie kontaktowe', $content, 'kontakt@perfumyfm.pl');
			sendMail('Zgłoszenie kontaktowe', $content, 'kontakt@perfumyfm.pl', 'berti75@interia.pl');
            
            switch($_SESSION['lang'])
            {
                case 'ru' :  $msg = 'Ваш запрос уже отправлен'; break;
                case 'en' : $msg = 'The report has been sent'; break;
                default : $msg = 'Zgłoszenie zostało wysłane'; break;
            }

            $msg_class = 'notice';
            
            $_POST['name'] = "";
            $_POST['email'] = "";
            $_POST['phone'] = "";
            $_POST['text'] = "";
            
        }
        else {

            switch($_SESSION['lang'])
            {
                case 'ru' :  $msg = 'Пожалуйста, заполните все обязательные поля'; break;
                case 'ru' :  $msg = 'Wypełnij poprawnie wszystkie pola'; break;
                default : $msg = 'Please fill in all fields'; break;
            }

            $msg = 
            $msg_class = 'error';
        }
        
    }
        

?>

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
            case 'ru' : echo '<h2>FM GROUP Россия</h2>'; break;
            case 'en' : echo '<h2>FM GROUP Malaysia</h2>'; break;
            default : echo '<h2>FM GROUP Polska</h2>';
        }
        ?>
        
        
        
        <table style="width: 100%">
            <tr>
                <td style="width: 40%">
                    <?php 
                    switch($_SESSION['lang'])
                    {
                        case 'ru' : echo '<h3>Контактная информация</h3>'; break;
                        case 'en' : echo '<h3>Contact Details</h3>'; break;
                        
                        default : echo '<h3>Dane kontaktowe</h3>';
                    }
                    ?>
                    
                </td>
                <td style="width: 60%">
                    <?php 
                    switch($_SESSION['lang'])
                    {
                        case 'ru' : //echo '<h3 style="font-size: 12px;">Оставьте нам Свой номер телефона - Мы обязательно Вам позвоним</h3>'; 
                        break;
                        case 'en' : //echo '<h3 style="font-size: 12px;">Оставьте нам Свой номер телефона - Мы обязательно Вам позвоним</h3>'; 
                        break;
                        default : echo '<h3>Zostam nam swój nr - oddzwonimy</h3>';
                    }
                    ?>
                    
                </td>
            </tr>
            <tr>
                <td style="color: black; padding-left: 20px;">
					FM GROUP Manager <br />
                    <?php
                    switch($_SESSION['lang'])
                    {
                        case 'ru' : echo 'Павел Шлебода'; break;
                        case 'en' : echo 'Paul Sleboda '; break;
                        default : echo 'Paweł Śleboda'; break;
                    }
                    ?>
                     <br />
                    <?php  if($_SESSION['lang'] == 'pl'): ?>                    
                        <span class="ico ico-phone">tel. 507 759 582</span> <br />
                        <span class="ico ico-phone">tel. 727 919 065 (FM GROUP Mobile)</span> <br />                        
                    <?php endif; ?>
                    <span class="ico ico-email">
                        <?php 
                        switch($_SESSION['lang'])   
                        {
                            case 'ru' : echo '<a href="mailto:info@fmgroup-world.ru">info@fmgroup-world.ru</a>'; break;
                            case 'en' : echo 'e-mail: <a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a>'; break;
                            default: echo '<a href="mailto:biuro@zarabiajnaperfumachfm.pl">biuro@zarabiajnaperfumachfm.pl</a>';
                        }   
                        ?>
                        
                    </span>

                    <?php if($_SESSION['lang'] == 'en'): ?>
                    <br />
                    B-0-5 Megan Avenue 1,<br />
                    189 Jalan Tun Razak,<br />
                    50400 Kuala Lumpur,<br />
                    Malaysia<br /><br />

                    phone: +60 3 2181 2000<br />
                    e-mail: office@fmcosmetics.my<br /><br />


                    Office hours:<br />

                    Monday, Wednesday, Thursday: 10.00 am - 7.00 pm<br />

                    Tuesday, Friday: 10.00 am - 10.30 pm<br />

                    Saturday: 12.00 pm - 7.00 pm<br />

                    Sunday: closed<br /><br />

                    <iframe width="525" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=B-0-5+Megan+Avenue+1,+189+Jalan+Tun+Razak,+50400+Kuala+Lumpur,+Malaysia&amp;sll=50.246665,19.004371&amp;sspn=1.953131,5.053711&amp;t=m&amp;ie=UTF8&amp;hq=B-0-5+Megan+Avenue+1,+189+Jalan+Tun+Razak,+50400+Kuala+Lumpur,+Malaysia&amp;ll=3.167298,101.717906&amp;spn=0.012855,0.022531&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>

                    <?php endif; ?>
                    
                </td>
                <td style="padding-left: 20px;">
                    <?php  if($_SESSION['lang'] == 'pl'): ?> 
                    <form action="<?php echo $host;?>/?p=kontakt" method="post">

                        <input type="text" name="one_phone" value="wpisz tutaj swój numer telefonu" onfocus="if(this.value=='wpisz tutaj swój numer telefonu') this.value='';" onblur="if(this.value=='') this.value='wpisz tutaj swój numer telefonu';" />
                        
                        <input type="submit" class="send_<?php echo $_SESSION['lang']; ?>" value="" />
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        <?php  if($_SESSION['lang'] == 'ru'): ?> 
        <br /><br />
        <table style="width: 100%">
            <tr>
                <td colspan="2">
                    Склады FM Group Russia расположены в городах: <br />
                    <strong>                    
                    Санкт-Петербург<br />
                    Ижевск<br />
                    Ростов-на-Дону<br />
                    Москва<br />
                    Красноярск
                    </strong><br /><br />
                    Каждый дистрибьютор FM Group может заказать продукцию с любого склада, отправив заказ по электронной почте или факсу.></br />
                    На каждом складе есть выставка образцов продукции FM Group. &copy;
                    <div class="hr"></div>

                    <div style="text-align: center;">
                        ГОРЯЧАЯ ЛИНИЯ fm GROUP - 8 800 555 71 55 (звонок бесплатный)
                    </div>

                    <div class="hr"></div>

                    <h2>FM Group Ростов-на-Дону</h2>
                    ул. Капустина, 16.<br /><br />
                    <strong>Старший менеджер отдела продаж: </strong><br />
                    Тел.: 8-903-401-38-68,<br />
                    Тел.: 8 (863) 221-38-68 <br />
                    Факс: 8 (863) 235-62-44<br />
                    <strong>Отдел продаж по безналичному расчету:</strong><br />
                    Тел.: 8-961-420-88-89,<br />
                    Тел.: 8-903-401-36-56,<br />
                    Тел.: 8 (863) 221-36-56.<br />
                    <br />
                    Время работы: <br />
                    Понедельник-пятница 8:00 – 17:00<br />
                    Суббота 9:00 – 15:00 <br /><br />

                    Заказ: <a href="mailto:fmrostovdon@gmail.com">fmrostovdon@gmail.com</a>
                    <br /><br />

                    <strong>Отдел розничных продаж</strong> (за наличный расчёт):<br />
                    Время работы: <br />
                    Понедельник-пятница 10:00 – 19:00<br />
                    Суббота 11:00 – 17:00<br />
                    <strong>Отдел развития:</strong><br />
                    Тел.: +7 (863) 296-97-99<br />
                    Тел.горячей линии: 8-800-555-71-55, в тональном режиме набрать 6<br />
                    <a href="mailto:fmrazvitie@gmail.com">fmrazvitie@gmail.com</a><br />
                    <br />
                    Время работы: <br />
                    Понедельник-пятница 10:00 – 19:00<br />
                    Суббота 11:00 – 17:00<br /><br />

                    <a href="mailto:fmrostovdon@gmail.com">fmrostovdon@gmail.com</a>


                    <br /><br />


                </td>
                
            </tr>
            <tr>
                <td style="width: 50%">
                    <h2>FM Group Санкт-Петербург</h2>

                    пр. Обуховской обороны д.209<br />
                    РЕЖИМ РАБОТЫ:<br />
                    ПН-ПТ 10.00-19.00<br />
                    СБ 11.00-17.00<br />
                    ВС - ВЫХОДНОЙ<br />
                    ОБЕД 13.00-13.40<br />
                    ТЕЛ: <br />
                    (812)676-40-34<br />
                    (812)676-70-59<br />
                    <a href="mailto:spbzakaz@gmail.com">spbzakaz@gmail.com</a><br />
<br /><br />
                </td>
                <td style="width: 50%">

                    <h2>FM Group Ижевск</h2>

                    <strong>Адрес:</strong><br />
                    Россия, Ижевск, ул. Удмуртская, 304 <br />
                    (бизнес-центр «Аврора»)<br />
                    <strong>Время работы:</strong>  <br /><br />
                    Понедельник-пятница 9:00 – 19:00<br />
                    Суббота 11:00 – 16:00<br />
                    Воскресенье – выходной<br /><br />
                    Тел.: +7 (3412) 908653 – офис<br />
                    Тел.: +7 (3412) 908093 – приемная<br />
                    Тел.: +7 (904) 2768124 – склад, отдел доставки<br /><br />

                    для заказов izhzakaz@gmail.com<br />
                    для запросов  izhevskinfo@gmail.com <br />
                    для подтверждений об оплате izhevskpay@gmail.com <br />
                    пн - пт с 10.00 до 19.00 <br />
                    сбб с 10.00 до 17.00 <br />
                    вс выходной <br />

<br /><br />
                </td>
            </tr>   
            <tr>

                <td>

                    <h2>FM Group Москва</h2>
                    <strong>Адрес: </strong><br />
                    Россия, 115533, г. Москва, пр. Андропова, д. 22<br />
                    <strong>Телефоны: </strong><br />
                    +7 (495) 755-92-17 и +7 <br /> (495) 755-92-18<br /><br />
                    <strong>Время работы офиса:</strong><br />
                    Понедельник - Пятница 10:00 - 19:00<br /><br />
                    <strong>Пункт выдачи продукции за наличный расчет:</strong><br />
                    Понедельник - Пятница 10:00 - 19:00, перерыв 13:00 - 13:40.<br />
                    Суббота, Воскресенье 11:00 - 17:00<br />


                </td>
                <td>

                    <h2>FM Group Красноярск</h2>
                    Россия, 660018, г. Красноярск, пр. Свободный, д.27 <br /><br />
                    Тел.: (391-2) 74-51-15 <br />
                    Тел./факс: (391-2) 181-180<br /><br />
                    Заказ: <a href="mailto:kraszakaz@g-service.ru">kraszakaz@g-service.ru</a>


                </td>

            </tr>
        </table>
        <?php endif; ?>
        
        <div class="hr"></div>
        <?php 
        switch($_SESSION['lang'])
        {
            case 'ru' : echo '<h3>Контактная форма</h3>'; break;
            case 'en' : echo '<h3>Contact form </h3>'; break;
            default : echo '<h3>Formularz kontaktowy</h3>';
        }
        ?>
        
        <form action="<?php echo $host;?>/?p=kontakt" method="post">
            <table class="table-form">
                <?php if($require_msg['name']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['name']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Имя и Фамилия'; break;
                                case 'en' : echo 'Name Surname '; break;
                                default : echo 'Imię i nazwisko';
                            }
                        ?>
                        
                    </td>
                    <td><input name="name" type="text" value="<?php echo $_POST['name'] ?>" /></td>
                </tr>
                <?php if($require_msg['email']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['email']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Aдрес электронной почты'; break;
                                case 'ru' : echo 'Email'; break;
                                default : echo 'E-mail:';
                            }
                        ?>                        
                    </td>
                    <td><input name="email" type="text" value="<?php echo $_POST['email'] ?>" /></td>
                </tr>
                <?php if($require_msg['phone']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['phone']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Контактный телефон'; break;
                                case 'en' : echo 'Phone Number'; break;
                                default : echo 'Telefon kontaktowy';
                            }
                        ?> 
                    </td>
                    <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?>" /></td>
                </tr>
                <?php if($require_msg['text']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['text']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Задай вопрос'; break;
                                case 'en' : echo 'Ask a question'; break;                                
                                default : echo 'Zadaj Pytanie';
                            }
                        ?> 
                        
                    </td>
                    <td>
                        <textarea name="text"><?php echo $_POST['text'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="contact" class="send_<?php echo $_SESSION['lang']; ?>" value="" /></td>
                </tr>
            </table>
        </form>
        <br />
        
    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>
