<div class="page-content">

    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>
<?php 
switch($_SESSION['lang'])
{
    case 'ru' : echo ('
        <h3>Духи FM от Федерико Махора</h3>
        <p>        
FM Group является компанией прямых продаж, высокое качество духов FM приносит в нашу жизнь много прекрасного. FM Group постоянно развивает новые идеи, благодаря чему наши духи создаются не только со освежающими ароматами, но также и с  очень нежными запахами.  Стратегическим партнером FM Group World является Perfand (награда Кафедры Пульс Бизнеса и   DROM),  который производит высококачественные ароматные компоненты. Финансовые результаты выдвигают FM Group на первые места среди лучших парфюмерных компаний в мире.  Духи адресованы людям любого возраста и поэтому из  множества ароматов каждый может выбрать что-то для себя. Предлагаем Вам широкий спектр запахов  бренда FM  самого высокого качества по разумной цене. Каждая  мелкая деталь духов FM учтена таким образом, чтобы удовлетворить вкус даже самого изысканого покупателя.
        </p>
'); 
    break;

    case 'en' : echo ('
        <h3>Perfumes FM ny Federico Mahora </h3>
        <p>        
FM Group is a  direct sales company, with perfume products of high quality that introduces a lot of  new  ventures into our lives.  In FM Group, new ideas are  initiated and these ideas are the reason why  the perfumes are created not only  from fresh fragrances, but also from sensual scents.  Rerfand, that is awarded by Pulse of Business and DROM  is the  strategic partner   of FM Group and the producer of all the components of the fragrances. Taking into account the financial results, FM Group is the head of companies that progresses in the most dynamic way. Perfumes of FM Group are for persons of all ages and that is why everybody can find the fragrance for herself/himself from many proposed ones. We propose to you the  wide range of perfumes from FM brand of  high quality and at the reasonable prices.  All these factors ensure, that our perfumes are perfect in each inch, they pamper everybody’s senses, even  the most demanding clients. 
        </p>
'); 
    break;

    default : echo ('
        <h3>Perfumy FM by Federico Mahora</h3>
        <p>
            FM GROUP to firma sprzedaży bezpośredniej, której wysokiej jakości perfumy FM wnoszą wiele
            nowego do naszego życia. W FM Group stale są opracowywane nowe pomysły które sprawiają,
            że nasze perfumy tworzone są nie tylko z orzeźwiających zapachów, a także z nut zmysłowych.
            Strategicznym partnerem FM Group World jest Perfand nagrodzony przez Kapitułę Pulsu Biznesu
            oraz DROM który produkuje wysokiej jakości komponenty zapachowe. Wyniki finansowe stawiają FM
            Group w czołówce najlepiej rozwijających się firm perfumeryjnych w Polsce. Perfumy FM skierowane
            są do ludzi w każdym wieku i dlatego z wielu nut zapachowych każdy wybierze coś dla siebie.
            Proponujemy Państwu bogatą gamę zapachów perfum sygnowanych marką FM o najwyższej jakości w bardzo dobrej cenie.
            Wszystkie te czynniki sprawiają, że nasze perfumy FM są dopracowane w każdym calu, dlatego też
            pieszczą zmysły wszystkich, nawet tych najbardziej wymagających.
        </p>
');
}
?>
        
        <br />
        <table style="width: 300px; max-width: 300px; min-width: 300px; margin: 0 auto;">
            <tr>
                <td><a href="<?php echo $host ?>/katalogi.html" style="margin: 0 auto;" class="cat1">
                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo 'скачать pdf'; break;
                            case 'en' : echo 'donwload pdf'; break;
                            default : echo 'pobierz pdf';
                        }
                        ?>  
                </a></td>
                <td><a href="<?php echo $host ?>/katalogi.html" style="margin: 0 auto;" class="cat2">
                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo 'скачать pdf'; break;
                            case 'en' : echo 'donwload pdf'; break;
                            default : echo 'pobierz pdf';
                        }
                        ?>  
                </a> </td>
            </tr>
        </table>
        
        <p>
            <br /><br />
<?php include('pages/dane.php'); ?>
        </p>
        
    </div>

    <?php include('pages/right.php'); ?>

</div>