<div class="page-content">

    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>

        <?php
            switch($_SESSION['lang'])
            {
                case 'ru' : echo '<h2>Подтверждение регистрации</h2>'; break;
                case 'en' :
                case 'en2' :  echo '<h2>Confirmation of registration</h2>'; break;
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
        Data urodzenia: <?php echo $_SESSION['dataur']; ?><br />
        Telefon komórkowy: <?php echo $_SESSION['phone']; ?><br />
        PESEL: <?php echo $_SESSION['pesel']; ?><br />
        Seria i nr dowodu osobistego: <?php echo $_SESSION['dowod']; ?><br />
        Adres zameldowania: <?php echo $_SESSION['address']; ?><br />
        Adres korespodencyjny: <?php echo $_SESSION['address2']; ?><br />
        Rodzaj startera: <?php echo $_SESSION['type']; ?><br />
        Rodzaj płatności: <?php echo $_SESSION['payable']; ?><br />
        Uwagi: <?php echo $_SESSION['text']; ?><br />

<br />
Do 24 godzin zostanie wysłany do Pani/a osobny e-mail ze specjalnym linkiem, który trzeba kliknąć, aby potwierdzić i jednocześnie zakończyć proces rejestracji. Po kliknięciu w ten link zostanie Pan/i przekierowana do sklepu internetowego FM, gdzie trzeba zakupić wybrany starter (jeżeli został wybrany) oraz jednocześnie można zakupić inne produkty FM już po cenach dystrybutora.
<br /><br />
Klikając w przesłany na podany przez Ciebie adres mailowy link aktywacyjny, zostajesz od razu pełnoprawnym Partnerem Biznesowym FM GROUP.
<br /><br />
Jako nowy Partner Biznesowy otrzymasz na podany przez siebie adres e-mail jednorazowe hasło i login. Podczas pierwszego logowania się na stronie internetowej www.fmgroup.pl zmień hasło jednorazowe na własne. Login i hasło są konieczne, aby składać zamówienia w Sklepie Internetowym FM GROUP oraz korzystać ze Strefy Partnera.
                        <br /><br />
Formularz został wysłany. Dziękujemy. Skontaktujemy się z Państwem najszybciej jak to możliwe.<br />
W razie pytań proszę dzwonić: +48 507 759 582 <br />
                        Pozdrawiam i życzę owocnej współpracy<br />

                        Paweł Śleboda<br />

                        tel. 507 759 582<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;727 919 065 <br />



        </p>

        <?php elseif($_SESSION['lang'] == 'ru'): ?>
        <p>

Регистрация завершена<br />
Спасибо за заполнение формы. Пожалуйста,<br />
ждите письмо с ссылкой для активации<br />
Добрый день!
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
        State: <?php echo $_SESSION['state']; ?><br />
Mobile Phone / Telefon Bimbit: <?php echo $_SESSION['mobile']; ?><br />
Phone / Telefon: <?php echo $_SESSION['phone']; ?><br />
Comments: <?php echo $_SESSION['text']; ?><br />

<br /><br />
I greet and wish you a fruitful cooperation<br />
FM GROUP Manager<br />
Paul Sleboda<br />
<a href="mailto:info@fmcosmetics-malaysia.com">info@fmcosmetics-malaysia.com</a>
</p>


    <?php elseif($_SESSION['lang'] == 'en2'): ?>


<p>
Terima kasih telah mengirimkan formulir aplikasi Anda ke FM GROUP Indonesia. 
<br /><br />
Petugas Customer Care kami akan melakukan evaluasi terhadap data Anda dan akan segera menghubungi Anda untuk mengatur beberapa hal berikut ini: 
<br /><br />
1. Total jumlah pembayaran dan metode pembayaran Tim kami akan mengkonfirmasi total jumlah pembayaran (berikut ongkos kirim bila ada) dan metode pembayaran yang telah dipilih. Pendaftaran distributor baru akan diproses setelah kami menerima seluruh pembayaran tersebut. 
<br /><br />
2. Metode pengambilan Tim kami akan melakukan klarifikasi apakah Anda menginginkan produk untuk dikirim ke alamat Anda atau melakukan pengambilan langsung ke kantor kami (Jakarta/Yogyakarta/Manado). 
<br /><br />
3. Kelengkapan data Tim kami akan melakukan klarifikasi terhadap data penting Anda dan akan memberitahukan langkah selanjutnya (setelah pembayaran diproses) untuk secara resmi terdaftar sebagai Distributor FM GROUP. 
<br /><br />
Apabila Anda tidak menerima informasi dari petugas kami dalam waktu 2 hari ke depan, harap hubungi kami langsung di: 
<br />Telepon : 021-799 25 28 
<br />Email : customer.care@fmgroup.co.id 
<br />(harap sertakan nomor formulir aplikasi Anda saat menghubungi kami) 
<br /><br />
Informasi di atas berikut formulir aplikasi telah terkirim otomatis ke alamat email Anda di 
<br /><br />
Salam sukses selalu untuk Anda, <br />
Manajemen FM GROUP Indonesia
</p>
    <?php endif; ?>

    </div>

    <?php include('pages/right.php'); ?>

</div>
