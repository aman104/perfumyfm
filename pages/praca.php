<div class="page-content">

    

    <div class="page-main">

         <?php echo renderBreadcrumbs($host, $page, $pages); ?>
<?php 
switch($_SESSION['lang'])
{
    case 'ru' : echo ('
<p>  
Представьте себе
<br /><br />
работу, где вы полностью независимы. Вы сами решаете, с кем Вы будете работать.  Вы выбираете удобное для Вас время работы, а Ваши коллеги по работе – это партнеры, которым Вы можете полностью доверять.
<br /><br />
Подумайте о работе, которая позволит Вам достичь своих целей и амбиций, будет постоянно приносить радость и вселять в Вас энтузиазм.
<br /><br />
Обратите внимание на то, как интересно было бы, если бы Вы могли сами задавать параметры своего успеха и достигать поставленные Вами цели.
<br /><br />
Вы думаете, что это только мечта? Ничего подобного! Вскоре эта фантазия может воплотится в реальность. От Вас потребуется лишь немного времени и Вы узнаете принципы, которые помогут Вам добиться успеха. 
<br /><br />
FM GROUP существует с 1 сентября 2004 года. Во всем мире работают с нами 589 000 активных дистрибьюторов.
<br /><br />
Идей основателя было создание линии эксклюзивных парфюмерных продуктов. Сегодня FM Group предлагает оригинальные духи, модную косметику, высококачественные средства для чистки и современные телекоммуникационные услуги. 
<br /><br />
Парфюмерные продукты FM Group производятся на основе ароматов, созданных компанией DROM Fragrances
</p>  
'); 
    break;
    case 'en' :
    case 'en2' :  echo ('
<p>  
Just imagine
<br /><br />
…job,  where you are absolutely free. You decide  whom to work with, you choose working hours that are convenient for you, and the members of your team are  your partners, whom you absolutely trust. 
<br /><br />
Think about occupation, thanks to which you reach your goals and ambitions, about the job, that you really love and you carry out with great enthusiasm. 
<br /><br />
Imagine, how interesting it is when by yourself you determine  how successful you would be and you work towards it. 
<br /><br />
You think it is only dream? You are absolutely wrong! In a very short time  the vision can become reality. It is imperative that you do not waste more time and get familiar with the principles that will lead you to success. 
<br /><br />
FM Group was established on the 1st September, 2004. It cooperates with  more than 600 000 active distributors worldwide.
<br /><br />
The idea of the founder of the FM GROUP was to create a line of luxury products. Nowadays in FM GROUP offers you can find original perfumes and toilet waters, fashion-conscious, colourful cosmetics and cleaning products of high quality.    
<br /><br />
Perfumes of FM GROUP are produced based on fragrances compositions  created by drom FRAGRANCES.
<br /><br />
</p>  
'); 
    break;    
    default : echo ('
<p>  
Wyobraź sobie...
<br /><br />
...pracę, w której jesteś całkowicie niezależny. Sam decydujesz o tym z kim będziesz pracować,
wybierasz dogodne dla siebie godziny pracy, zaś grono Twoich współpracowników to partnerzy,
którym całkowicie możesz zaufać.
<br /><br />
Pomyśl o zajęciu, dzięki któremu zrealizujesz swoje cele i ambicje, o pracy, która stanie się dla Ciebie
przyjemnością, do której będziesz podchodzić z wielkim entuzjazmem.
<br /><br />
Zwróć uwagę, jak ciekawie byłoby, gdybyś sam określał, czym jest Twój sukces i konsekwentnie dążył
do jego realizacji.
<br /><br />
Myślisz, że to tylko marzenie? Nic podobnego! Już wkrótce to wyobrażenie może stać się
rzeczywistością. Wystarczy, że poświęcisz chwilę czasu i poznasz z nami zasady, które poprowadzą Cię
do sukcesu.
<br /><br />
Firma FM GROUP istnieje od 1 września 2004 roku. Na całym świecie współpracuje z nami 589 000 aktywnych Dystrybutorów.
<br /><br />
Ideą założyciela FM GROUP było stworzenie linii ekskluzywnych produktów. Dziś w ofercie FM
GROUP znajdziesz oryginalne perfumy i wody perfumowane, modne kosmetyki kolorowe, wysokiej
jakości środki czystości oraz nowoczesne usługi telekomunikacyjne.
<br /><br />
Produkty perfumeryjne marki FM GROUP wytwarzane są na bazie kompozycji zapachowych
kreowanych przez drom FRAGRANCES.
<br /><br />
Usługi FM Group Mobile świadczone są przez FM Group Mobile Sp. z o.o., której partnerem
strategicznym jest Polkomtel SA, jeden z największych operatorów w Polsce.
</p>        
');
}
?>


      <br />

        <a class="button button_center button_ceny" href="<?php echo $host ?>/rejestracja.html"></a>

        

        <p>

            <br /><br />

<?php include('pages/dane.php'); ?>

        </p>

        

    </div>

    

    <?php include('pages/right.php'); ?>

    

</div>