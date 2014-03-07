<div class="page-content">
    
    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
        <?php
            switch($_SESSION['lang'])
            {
                case 'ru' : echo '<h2>Подтверждение регистрации</h2>'; break;
                case 'en' : echo '<h2>Confirmation of registration</h2>'; break;
                default : echo '<h2>Potwierdzenie rejestracji</h2>';
            }
        ?>
      
        <?php if($_SESSION['lang'] == 'pl'): ?>            
        <p>
        Witamy
        <br /><br />
        Dziękujemy  za wypełnienie formularza rejestracyjnego odnośnie rozpoczęcia współpracy z FM GROUP. Teraz dane z formularza zostaną przepisane do umowy, Poniżej dane, które zostały przez Ciebie wpisane podczas wypełniania formularza, prosimy sprawdzić czy wszystko się zgadza i w razie potrzeby o kontakt z nami.
        <br /><br />
        Imię i nazwisko: <?php echo $_SESSION['name']; ?><br />
        E-mail: <?php echo $_SESSION['email']; ?><br />
        Telefon komórkowy: <?php echo $_SESSION['phone']; ?><br />
        PESEL: <?php echo $_SESSION['pesel']; ?><br />
        Seria i nr dowodu osobistego: <?php echo $_SESSION['dowod']; ?><br />
        Adres zameldowania: <?php echo $_SESSION['address']; ?><br />
        Adres korespodencyjny: <?php echo $_SESSION['address2']; ?><br />
        Rodzaj startera: <?php echo $_SESSION['type']; ?><br />
        Rodzaj płatności: <?php echo $_SESSION['payable']; ?><br />
        Uwagi: <?php echo $_SESSION['text']; ?><br />



<br />
        Umowa "przyjdzie" wypełniona osobnym e-mailem. Trzeba będzie ją wówczas wydrukować, podpisać i odesłać pocztą tradycyjną na adres FM (FM GROUP
55-114 Wisznia Mała, Szewce ul. Wrocławska 2a) lub skontaktuj się z nami tel. 507 759 582 (Orange) - wypełnimy za CIEBIE formalności.


<br /><br />
        Pozdrawiam i życzę owocnej współpracy<br />
        Paweł Śleboda<br />
        tel. 507 759 582 (Orange)<br />
        

        
        </p>

        <?php elseif($_SESSION['lang'] == 'ru'): ?>
        <p>
Добрый день!
<br /><br />Огромное спасибо за выполнение формуляра с целью сотрудничества.
<br /><br />В течении 2 рабочих дней с Вами свяжется сотрудник FM GROUP Россия с целью предоставления р/с, на который необходимо оплатить выбранную папку. Вместе с папкой Вы получите договор, где нужно вписать номер спонсора (получите отдельным мейлом), подписать договор и вклеить номер папки. 
<br /><br />Затем договор нужно выслать меилом на адрес: fmkontrakt@gmail.com. В течении месяца оригинал договора необходимо выслать почтой по адресу: ООО «Федерико Махора»  Россия, 344092, г. Ростов-на-Дону,ул. Капустина, 16.
<br /><br />
Благодарю и удачи
<br /><br />
FM GROUP Manager<br />
Павел Шлебода
</p>
        


    <?php elseif($_SESSION['lang'] == 'en'): ?>
<p>
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
        
        First Name / Nama: <?php echo $_SESSION['name']; ?><br />
        Last Name / Nama Keluarga: <?php echo $_SESSION['name2']; ?><br />
        IC No. / No. IC: <?php echo $_SESSION['ic']; ?><br />
        Your Email: <?php echo $_SESSION['email']; ?><br />
        Date of Birth / Tarikh Lahir: <?php echo $_SESSION['birth']; ?><br />
        Address / Alamat: <?php echo $_SESSION['address']; ?><br />
        Town / City / Bandar: <?php echo $_SESSION['city']; ?><br />
        Postcode / Poskod: <?php echo $_SESSION['postcode']; ?><br />
        Country / Negara: <?php echo $_SESSION['country']; ?><br />
Mobile Phone / Telefon Bimbit: <?php echo $_SESSION['mobile']; ?><br />
Phone / Telefon: <?php echo $_SESSION['phone']; ?><br />
Comments: <?php echo $_SESSION['text']; ?><br />

<br /><br />
I greet and wish you a fruitful cooperation<br />
FM GROUP Manager<br />
Paul Sleboda<br />
<a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a>
</p>
    <?php endif; ?>

    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>
