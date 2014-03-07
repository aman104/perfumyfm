<?php

error_reporting(0);

session_start();



//$host = 'http://localhost/~fmgroup';

$host = 'http://'.$_SERVER['SERVER_NAME'];

$is_home = isset($_GET['p']) ? false : true;

$langs = array('pl', 'ru', 'en');

$page = (isset($_GET['p'])) ? $_GET['p'] : false;

if($_GET['lang'] && in_array($_GET['lang'], $langs))
{
    $_SESSION['lang'] = $_GET['lang'];
}
elseif(isset($_SESSION['lang']))
{
    $_SESSION['lang'] = $_SESSION['lang'];
}
else
{
    $_SESSION['lang'] = 'pl';    
}

if(in_array($_SERVER['SERVER_NAME'], array('fmgroup-world.ru', 'www.fmgroup-world.ru')))
{
    $_SESSION['lang'] = 'ru';
}


if(in_array($_SERVER['SERVER_NAME'], array('fmgroup-world.eu', 'www.fmgroup-world.eu', 'www.fmcosmetics-malaysia.com', 'fmcosmetics-malaysia.com')))
{
    $_SESSION['lang'] = 'en';
}




if($_SESSION['lang'] == 'ru')
{

    $pages = array(
        'ofirmie' => 'О компании',
        'jakzarabiac' => 'Как зарабатывать?',
        'korzysci' => 'Выгоды',
        'startery' => 'Стартовый пакет',
        'perfumy' => 'Духи',
        'filmy' => 'Видео',
        'praca' => 'Работа',
        'rejestracja' => 'Регистрация',
        'regulamin' => 'Правила',
        'katalogi' => 'Каталоги',
        'kontakt' => 'Контакт',
        'solaria' => 'Солярии, Салоны Красоты и Парикмахерские Салоны',
        'potwierdzenie' => 'Подтверждение регистрации',
        'ceny' => 'Цена производителя',
        'dlaczegowarto' => 'почему'
    );

}
elseif($_SESSION['lang'] == 'en')
{
   $pages = array(
        'ofirmie' => 'About company',
        'jakzarabiac' => 'How to earn?',
        'korzysci' => 'Benefits',
        'startery' => 'Starters',
        'perfumy' => 'Perfums',
        'filmy' => 'Films',
        'praca' => 'Work',
        'rejestracja' => 'Registration',
        'regulamin' => 'Regulations',
        'katalogi' => 'Catalogs',
        'kontakt' => 'Contact',
        'solaria' => 'Solariums',
        'potwierdzenie' => 'Confirmation of registration',
        'ceny' => 'Цена производителя',
        'dlaczegowarto' => 'Why worth',
        'customer' => 'Preferred Customer'
    ); 
}
else
{

    $pages = array(
        'ofirmie' => 'O firmie',
        'jakzarabiac' => 'Jak zarabiać?',
        'korzysci' => 'Korzyści',
        'startery' => 'Startery',
        'perfumy' => 'Perfumy',
        'filmy' => 'Filmy',
        'praca' => 'Praca',
        'rejestracja' => 'Rejestracja',
        'regulamin' => 'Regulamin',
        'katalogi' => 'Katalogi',
        'kontakt' => 'Kontakt',
        'solaria' => 'Solaria, gabinety kosmetyczne i fryzjerskie',
        'potwierdzenie' => 'Potwierdzenie rejestracji',
        'ceny' => 'Ceny producenta',
        'dlaczegowarto' => 'Dlaczego warto'
    );
} 



function renderMenu($host, $page) {
if($_SESSION['lang'] == 'ru')
{    
    $menu = '<ul class="menu-small">';
    $menu .= '<li><a class="';
    $menu .= ($page == "ofirmie") ? 'active' : '';
    $menu .= '" href="' . $host . '/ofirmie.html">О компании</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "jakzarabiac") ? 'active' : '';
    $menu .= '" href="' . $host . '/jakzarabiac.html">Как <br /> зарабатывать?</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "korzysci") ? 'active' : '';
    $menu .= '" href="' . $host . '/korzysci.html">Выгоды</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "startery") ? 'active' : '';
    $menu .= '" href="' . $host . '/startery.html">Стартовый <br /> пакет</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "perfumy") ? 'active' : '';
    $menu .= '" href="' . $host . '/perfumy.html">Духи</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "filmy") ? 'active' : '';
    $menu .= '" href="' . $host . '/filmy.html">Видео</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "praca") ? 'active' : '';
    $menu .= '" href="' . $host . '/praca.html">Работа</a></li>';
    $menu .= '<li><a class="active2 ';
    $menu .= ($page == "rejestracja") ? 'active' : '';
    $menu .= '" href="' . $host . '/rejestracja.html">Регистрация</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "regulamin") ? 'active' : '';
    $menu .= '" href="' . $host . '/regulamin.html">Правила</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "kontakt") ? 'active' : '';
    $menu .= '" href="' . $host . '/kontakt.html">Контакт</a></li>';
    $menu .= '</ul>';
} 
else if($_SESSION['lang'] == 'en')
{    
    $menu = '<ul class="menu-small">';
    $menu .= '<li><a class="';
    $menu .= ($page == "ofirmie") ? 'active' : '';
    $menu .= '" href="' . $host . '/ofirmie.html">About company</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "jakzarabiac") ? 'active' : '';
    $menu .= '" href="' . $host . '/jakzarabiac.html">How to earn?</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "korzysci") ? 'active' : '';
    $menu .= '" href="' . $host . '/korzysci.html">Benefits</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "startery") ? 'active' : '';
    $menu .= '" href="' . $host . '/startery.html">Starters</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "perfumy") ? 'active' : '';
    $menu .= '" href="' . $host . '/perfumy.html">Perfums</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "filmy") ? 'active' : '';
    $menu .= '" href="' . $host . '/filmy.html">Films</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "praca") ? 'active' : '';
    $menu .= '" href="' . $host . '/praca.html">Work</a></li>';
    $menu .= '<li><a class="active2 ';
    $menu .= ($page == "rejestracja") ? 'active' : '';
    $menu .= '" href="' . $host . '/rejestracja.html">Registration</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "regulamin") ? 'active' : '';
    $menu .= '" href="' . $host . '/regulamin.html">Regulations</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "kontakt") ? 'active' : '';
    $menu .= '" href="' . $host . '/kontakt.html">Contact</a></li>';
    $menu .= '</ul>';
}    
else
{

    $menu = '<ul>';
    $menu .= '<li><a class="';
    $menu .= ($page == "ofirmie") ? 'active' : '';
    $menu .= '" href="' . $host . '/ofirmie.html">O firmie</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "jakzarabiac") ? 'active' : '';
    $menu .= '" href="' . $host . '/jakzarabiac.html">Jak zarabiać?</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "korzysci") ? 'active' : '';
    $menu .= '" href="' . $host . '/korzysci.html">Korzyści</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "startery") ? 'active' : '';
    $menu .= '" href="' . $host . '/startery.html">Startery</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "perfumy") ? 'active' : '';
    $menu .= '" href="' . $host . '/perfumy.html">Perfumy</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "filmy") ? 'active' : '';
    $menu .= '" href="' . $host . '/filmy.html">Filmy</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "praca") ? 'active' : '';
    $menu .= '" href="' . $host . '/praca.html">Praca</a></li>';
    $menu .= '<li><a class="active2 ';
    $menu .= ($page == "rejestracja") ? 'active' : '';
    $menu .= '" href="' . $host . '/rejestracja.html">Rejestracja</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "regulamin") ? 'active' : '';
    $menu .= '" href="' . $host . '/regulamin.html">Regulamin</a></li>';
    $menu .= '<li><a class="';
    $menu .= ($page == "kontakt") ? 'active' : '';
    $menu .= '" href="' . $host . '/kontakt.html">Kontakt</a></li>';
    $menu .= '</ul>';

}

    return $menu;
}





function renderBreadcrumbs($host, $page, $pages)
{

    $return = '<ul class="breadcrumbs">';
if($_SESSION['lang'] == 'ru')
{  
    $return .= '<li>Находитесь на:</li>';
    $return .= '<li><a href="'.$host.'">Главная страница</a> /</li>';
}
elseif($_SESSION['lang'] == 'en')
{  
    $return .= '<li>You are:</li>';
    $return .= '<li><a href="'.$host.'">Main page</a> /</li>';
}
else
{
    $return .= '<li>Jesteś w:</li>';
    $return .= '<li><a href="'.$host.'">Strona główna</a> /</li>';
}    

    $return .= '<li><a href="'.$host.'/'.$page.'.html">'.$pages[$page].'</a></li>';
    $return .= '</ul>';
    $return .= '<div class="hr"></div>';

    return $return;

}        



function check_email($email) 

{

    $res = false;



    if((ereg("^[a-z0-9_\\.-]+@([a-z0-9_-]+\\.)+[a-z]{2,}$", $email)) == true) {

       $res = true;

    }



    return $res;

}



function sendMail($title, $content, $from = 'no-reply@no-reply.pl', $to = 'biuro@zarabiajnaperfumachfm.pl')

{

    $headers = '';

    $headers  .= 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers .= "From: ". $from . " <" . $from . ">\r\n";

    ini_set('sendmail_from', $from);
    mail($to, '=?UTF-8?B?'.base64_encode($title).'?=', $content, $headers);   
    
}



function clearPOST($tab)

{

    foreach($tab as $one);

    {

        $_POST[$one] = "";

    }

}







/* rejestracja : start */

    

    $msg = false;

    $msg_class = 'error';

    $require_msg = array();      

    if(isset($_POST['register_true']))

    {
        if($_SESSION['lang'] == 'ru')
        {
            $require = array('name', 'name2','name3', 'email', 'phone', 'dowod', 'address', 'type', 'date', 'country');       
        }
        elseif($_SESSION['lang'] == 'en')
        {
            $require = array('name','name2', 'ic', 'birth', 'city', 'postcode', 'country', 'email', 'mobile', 'address');    
        }
        else
        {
            $require = array('name', 'email', 'phone', 'dowod', 'address', 'type', 'payable');    
        }

        

        $is_true = true;

        foreach($require as $one)

        {            

            if(!isset($_POST[$one]) || empty($_POST[$one]))
            {
                switch($_SESSION['lang'])
                {
                    case 'ru' :  $require_msg[$one] = 'Обязательные поля'; break;
                    case 'en' :  $require_msg[$one] = 'Required field'; break;
                    default : $require_msg[$one] = 'Pole wymagane'; break;
                }
               

               $is_true = false;

            }

        }

        

        if($is_true)
        {
            if($_SESSION['lang'] == 'ru')
            {
                $content = 'Imie: '.$_POST['name'].' '.$_POST['name3'].'<br />';
                $content .= 'Nazwisko: '.$_POST['name2'].'<br />';
                $content .= 'Data urodzenia: '.$_POST['date'].'<br />';
                $content .= 'Adres e-mail: '.$_POST['email'].'<br />';
                $content .= 'Telefon: '.$_POST['phone'].'<br />';                
                $content .= 'Dowód: '.$_POST['dowod'].'<br />';
                $content .= 'Organ wydający: '.$_POST['dowod_name'].'<br />';
                $content .= 'Adres: '.$_POST['address'].'<br />';
                $content .= 'Kraj: '.$_POST['country'].'<br />';
                $content .= 'Firma: '.$_POST['firma'].'<br />';
                $content .= 'TIN: '.$_POST['tin'].'<br />';
                $content .= 'CAT: '.$_POST['cat'].'<br />';
                $tmp = ($_POST['wybor'] == '1') ? 'TAK' : 'NIE';
                $content .= 'Płatnik VAT: '.$tmp.'<br />';
                $content .= 'Rodzaj startera: '.$_POST['type'].'<br />';            
                if(isset($_POST['type2']))
                {
                    $content .= 'Typ: '.$_POST['type2'].'<br />';    
                }    
                            
                $content .= $_POST['text'];
            }
            elseif($_SESSION['lang'] == 'pl')
            {
                $content = 'Imie i nazwisko: '.$_POST['name'].'<br />';
                $content .= 'Adres e-mail: '.$_POST['email'].'<br />';
                $content .= 'Telefon: '.$_POST['phone'].'<br />';
                $content .= 'PESEL: '.$_POST['pesel'].'<br />';
                $content .= 'Dowód: '.$_POST['dowod'].'<br />';
                $content .= 'Adres: '.$_POST['address'].'<br />';
                $content .= 'Adres korespondencyjny: '.$_POST['address2'].'<br />';
                $content .= 'Rodzaj startera: '.$_POST['type'].'<br />';            
                if(isset($_POST['type2']))
                {
                    $content .= 'Typ: '.$_POST['type2'].'<br />';    
                }    
                $content .= 'Rodzaj płatnoście: '.$_POST['payable'].'<br /><br />';                    
                $content .= $_POST['text'];
            }
            elseif($_SESSION['lang'] == 'en')
            {
                $content = '<p>       
                First Name / Nama: '.$_POST['name'].'<br />
                Last Name / Nama Keluarga: '.$_POST['name2'].'<br />
                IC No. / No. IC: '.$_POST['ic'].'<br />
                Your Email: '.$_POST['email'].'<br />
                Date of Birth / Tarikh Lahir: '.$_POST['birth'].'<br />
                Address / Alamat: '.$_POST['address'].'<br />
                Town / City / Bandar: '.$_POST['city'].'<br />
                Postcode / Poskod: '.$_POST['postcode'].'<br />
                Country / Negara: '.$_POST['country'].'<br />
                Mobile Phone / Telefon Bimbit: '.$_POST['mobile'].'<br />
                Phone / Telefon: '.$_POST['phone'].'<br />
                
                Comments: '.$_POST['text'].'<br />';
            }

            

            sendMail('Rejestracja', $content, 'rejestracja@perfumyfm.pl');

			sendMail('Rejestracja', $content, 'rejestracja@perfumyfm.pl', 'berti75@interia.pl');

            if($_SESSION['lang'] == 'ru')
            {
                sendMail('Rejestracja', $content, 'rejestracja@perfumyfm.pl', 'info@fmgroup-world.ru');                
            }

            switch($_SESSION['lang'])
            {
                case 'ru' :  $msg = 'Ваш запрос уже отправлен'; break;
                case 'en' :  $msg = 'The report has been sent'; break;
                default : $msg = 'Zgłoszenie zostało wysłane'; break;
            }

            $msg_class = 'notice';


            if($_SESSION['lang'] == 'en') 
            {
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['name2'] = $_POST['name2'];
                $_SESSION['ic'] = $_POST['ic'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['birth'] = $_POST['birth'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['city'] = $_POST['city'];
                $_SESSION['postcode'] = $_POST['postcode'];
                $_SESSION['country'] = $_POST['country'];
                $_SESSION['mobile'] = $_POST['mobile'];  
                $_SESSION['phone'] = $_POST['phone']; 
                $_SESSION['type'] = $_POST['type']; 
                $_SESSION['text'] = $_POST['text'];  
            }          
            else
            {
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['name2'] = $_POST['name2'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phone'] = $_POST['phone'];
                $_SESSION['pesel'] = $_POST['pesel'];
                $_SESSION['dowod'] = $_POST['dowod'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['address2'] = $_POST['address2'];
                $_SESSION['type'] = $_POST['type'];
                $_SESSION['payable'] = $_POST['payable'];
                $_SESSION['text'] = $_POST['text'];  
            }


                        
            if($_SESSION['lang'] == 'pl')
            {
                $title = 'Rejestracja w systemie';
            $content2 = '<h2>Potwierdzenie rejestracji</h2><p>

                        Witamy

                        <br /><br />

                        Dziękujemy  za wypełnienie formularza rejestracyjnego odnośnie rozpoczęcia współpracy z FM GROUP. Teraz dane z formularza zostaną przepisane do umowy, Poniżej dane, które zostały przez Ciebie wpisane podczas wypełniania formularza, prosimy sprawdzić czy wszystko się zgadza i w razie potrzeby o kontakt z nami.

                        <br /><br />

                        Imię i nazwisko: '.$_SESSION['name'].'<br />

                        E-mail: '.$_SESSION['email'].'<br />

                        Telefon komórkowy: '.$_SESSION['phone'].'<br />

                        PESEL: '.$_SESSION['pesel'].'<br />

                        Seria i nr dowodu osobistego: '.$_SESSION['dowod'].'<br />

                        Adres zameldowania: '.$_SESSION['address'].'<br />

                        Adres korespodencyjny: '.$_SESSION['address2'].'<br />

                        Rodzaj startera: '.$_SESSION['type'].'<br />

                        Rodzaj płatności: '.$_SESSION['payable'].'<br />

                        Uwagi: '.$_SESSION['text'].'<br />        

                        <br />

                        Umowa "przyjdzie" wypełniona osobnym e-mailem. Trzeba będzie ją wówczas wydrukować, podpisać i odesłać pocztą tradycyjną na adres FM (FM GROUP 55-114 Wisznia Mała, Szewce ul. Wrocławska 2a) lub skontaktuj się z nami tel. 507 759 582 (Orange) - wypełnimy za CIEBIE formalności.

                        <br /><br />

                        Pozdrawiam i życzę owocnej współpracy<br />

                        Paweł Śleboda<br />

                        tel. 507 759 582 (Orange)<br />



                        </p>';
                }
                elseif($_SESSION['lang'] == 'ru')
                {
                    $title = 'Регистрация FM Group в России';
                    $content2 = '<h2>Подтверждение регистрации</h2><p>

Добрый день!
<br /><br />Огромное спасибо за выполнение формуляра с целью сотрудничества.
<br /><br />В течении 2 рабочих дней с Вами свяжется сотрудник FM GROUP Россия с целью предоставления р/с, на который необходимо оплатить выбранную папку. Вместе с папкой Вы получите договор, где нужно вписать номер спонсора (получите отдельным мейлом), подписать договор и вклеить номер папки. 
<br /><br />Затем договор нужно выслать меилом на адрес: fmkontrakt@gmail.com. В течении месяца оригинал договора необходимо выслать почтой по адресу: ООО «Федерико Махора»  Россия, 344092, г. Ростов-на-Дону,ул. Капустина, 16.
<br /><br />
Благодарю и удачи
<br /><br />
FM GROUP Manager<br />
Павел Шлебода</p>
                    ';
                }
                elseif($_SESSION['lang'] == 'en')
                {
                                        $title = 'Confirmation of registration';
                    $content2 = '<p>
Thank You.
<br /><br />
Your registration completed successfully!
<br /><br />
The application form and your identification number of FM GROUP will be sent to your e-mail address in 2 work days.
<br /><br />
Please do not forget to purchase your Starter Kit and to send a xerox copy of your IC (both sides) to FM Cosmetics Malaysia office within 30 days after registration. Failing to do so will result in deleting of your FM ID number from our system.
<br /><br />
Check your data - if you find any error please send us an e-mail - <a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a>.
<br /><br />
        
        First Name / Nama: '.$_SESSION['name'].'<br />
        Last Name / Nama Keluarga: '.$_SESSION['name2'].'<br />
        IC No. / No. IC: '.$_SESSION['ic'].'<br />
        Your Email: '.$_SESSION['email'].'<br />
        Date of Birth / Tarikh Lahir: '.$_SESSION['birth'].'<br />
        Address / Alamat: '.$_SESSION['address'].'<br />
        Town / City / Bandar: '.$_SESSION['city'].'<br />
        Postcode / Poskod: '.$_SESSION['postcode'].'<br />
        Country / Negara: '.$_SESSION['country'].'<br />
Mobile Phone / Telefon Bimbit: '.$_SESSION['mobile'].'<br />
Phone / Telefon: '.$_SESSION['phone'].'<br />
Comments: '.$_SESSION['text'].'<br />

<br /><br />
I greet and wish you a fruitful cooperation<br />
FM GROUP Manager<br />
Paul Sleboda<br />
<a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a>
</p>';
                }
            

            sendMail($title, $content2, 'rejestracja@perfumyfm.pl', $_SESSION['email']);

            

            header("Location: ".$host.'/?p=potwierdzenie');

        }

        else 

        {

            switch($_SESSION['lang'])
            {
                case 'ru' :  $msg = 'Пожалуйста, заполните все обязательные поля'; break;
                case 'en' :  $msg = 'Please fill in all fields'; break;
                default : $msg = 'Wypełnij poprawnie wszystkie pola'; break;
            }

            $msg_class = 'error';

        }

        

    }

    

/* rejestracja : stop */





?>