<div class="page-content">
    
    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
<?php 
switch($_SESSION['lang'])
{
    case 'ru' : echo ('
    	<p>
FM Group- это компания работающая в секторе многоуровневого маркетинга. Была основана в 2004 году. <br /><br />
Достигнутые в стране успехи сделали возможным выход компании на зарубежные рынки. Теперь марку знают в нескольких десятках стран Европы, в Северной и Южной Америке, Австралии, Африке и Азии. <br /><br />
Уникальным продуктом FM Group Россия являются высококачественные духи и туалетная вода с  ароматами от известных дизайнеров, созданные при сотрудничестве с фирмами PERFAND и DROM FRAGRANCES-мировых лидеров в этой отрасли. Дополнением к ассортименту является парфюмерная продукция (бальзамы, гели для душа, вода после бритья, крем для рук, пена для бритья  и другие парфюмерные изделия) <br /><br />
В ноябре 2008 года фирма начала работу в новом сегменте,  запуская на рынок высококачественные средства для чистки FM GROUP FOR HOME. <br /><br />
Новым достижением FM Group является коллекция  декоративной косметики FM GROUP MAKE UP, произведенная на основе минералов и обогащенная экстрактами и растительными маслами. <br /><br />
<h3>FM Group в мире</h3>

'); 

    break;
    
    default : echo ('
<p>
FM Group jest firmą działająca w sektorze marketingu wielopoziomowego. Została założona w 2004
roku.
<br /><br />
Odniesiony w kraju sukces umożliwił firmie FM GROUP dynamiczne wkroczenie na rynki zagraniczne.
Obecnie marka FM GROUP jest znana i ceniona w kilkudziesięciu krajach w Europie, Ameryce
Północnej i Południowej, Australii, Afryce oraz w Azji.
<br /><br />
Produktem flagowym FM GROUP Polska są wysokiej klasy perfumy i wody perfumowane o nutach
zapachowych największych kreatorów, tworzone przy współpracy z firmami PERFAND oraz DROM
FRAGRANCES - światowego lidera w tej branży.
Uzupełnieniem asortymentu są produkty perfrumeryjne (m. in. balsamy, żele pod prysznic, wody po
goleniu, perfumy do włosów, kremy do rąk, pianki do golenia oraz inne perfumowane kosmetyki).
<br /><br />
W listopadzie 2008 firma w kroczyła w nowy segment, wprowadzając na rynek doskonałej jakości
środki czystości pod marką FM GROUP FOR HOME.
<br /><br />
Od października 2009 roku klienci i dystrybutorzy mogą korzystać z usług wirtualnego operatora
telefonii komórkowej FM GROUP MOBILE. 
<br /><br />
Najnowszym osiągnięciem FM GROUP jest kolekcja
kosmetyków kolorowych FM GROUP MAKE UP, stworzona w oparciu o składniki mineralne,
wzbogacone ekstrakty i olejki roślinne.
<br /><br />
<h3>FM Group na świecie</h3>
');
}
?>


<a href="<?php echo $host; ?>/images/map.jpg">
<img src="<?php echo $host; ?>/images/map-small.jpg" />
</a>

<?php include('pages/dane.php'); ?>


        </p>
        
    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>