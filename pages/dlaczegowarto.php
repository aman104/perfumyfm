<div class="page-content">
    
    <div class="page-main">
        <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
<?php 
switch($_SESSION['lang'])
{
    case 'ru' : echo ('
<p>
Почему стоит стать дистрибьютором?
<br /><br />
 Сочетай полезное с приятным. Благодаря сотрудничеству с FM GROUP ты получаешь неограниченный доступ к широкому предложению продуктов ежедневного пользования высокого качества, где ты также найдешь также что то для себя. Ты решаешь, чем ты хочешь заниматься и где, самостоятельно строишь свой карьерный рост и сам  распоряжаешься своим временем. Получаешь не только полную свободу развития, но также и время для себя и своей семьи. 
<br /><br /><div style="text-align: center;"><img src="/images/dlaczego.jpg" /></div>
<br /><br />Подумай: хочешь экономить на ежемесячных покупках, зарабатывать дополнительные деньги, а может начать карьеру в бизнесе? FM GROUP  предлагает множество возможностей,  все зависит только от тебя- какую возможность и на каком этапе ты выберешь. Не уверен/а хочешь ли заниматься дистрибьюцией продуктов FM GROUP? Можешь покупать продукты высокого качества, которые необходимы каждый день для собственных нужд.  Собственный бизнес? С FM GROUP не нужно вкладывать больших денег, покупаешь только папку мини, которая будет  необходима для работы с клиентами. 
<br /><br />FM GROUP не оставить тебя без поддержки. Ты занимаешься своим бизнесом в удобное для тебя время, ты сам себе директор, но также динамически развивающаяся фирма предлагает тебе поддержку. FM GROUP делится знаниями и  приобретенным в течении нескольких лет опытом, организует множество тренингов и встреч для Дистрибьюторов. Дополнительным стимулом являются многие мотивирующие программы.
<br /><br />Сотрудничество с FM GROUP это не только профессиональное развитие, но также и личное. Можешь заниматься бизнесом со своей семьей или друзьями. В качестве дистрибьютора ты  знакомишься с новыми людьми, но и поддерживаешь уже существующие контакты. Со временем можешь начать помогать другим, делясь своим опытом и умениями, а также начать строить собственную сеть, которая будет работать на ваш общий успех.
</p>

'); 

    break;

    case 'en' : echo ('
<p>
Combine business with pleasure. Thanks to the co operation with FM GROUP, you can get easy access to wide range of high quality cosmetics for everyday use and you will find something specially for you. You decide what you would like to be involved in and where, independently you create your own career and organize your time.  You get not only a high degree of freedom of development, but also time for you and your family.
<div style="text-align: center;"><img src="/images/dlaczego.jpg" /></div>
<br /><br />Just think: do you want to save on monthly shopping, earn extra money or maybe start a career in business? FM GROUP offers you many of possibilities and what option you choose and at what stage – it depends only on you. You are not sure, if you want to start the distribution of FM GROUP products? You can become the Client and buy high quality products for every day use for yourself.   Do you think about owning your own business? You do not need to invest a lot of money with FM GROUP, you only buy the Collection Starter Kit, that is your  presentation tool. 
<br /><br />With FM GROUP you are not alone. You conveniently run your business your own way and you are your own boss, but you can also benefit from the support, that is granted by dynamic company. FM GROUP shares its knowledge and experience by great number of trainings and seminars for Distributors.  Motivational programs are additional incentives. 
<br /><br />Co operations with FM GROUP is not just  Professional development, but also personal . You have the possibility of  doing business with you family and friends. As a distributor you establish new relations and make  the older ones stronger. After some time you can start helping others, share your experience and skills and build your  own structure, that will be work for your mutual success.  
</p>
'); 

    break;    
    
    default : echo ('
<p>
Połącz przyjemne z pożytecznym. Dzięki współpracy z FM GROUP zyskujesz dostęp do obszernej palety doskonałej jakości artykułów codziennego użytku, w której znajdziesz coś dla siebie. Ty decydujesz, czym chcesz się zajmować i gdzie, samodzielnie kształtujesz swoją karierę i sam organizujesz swój czas. Zyskujesz nie tylko dużą swobodę rozwoju, ale i czas dla siebie i Twojej rodziny.
<div style="text-align: center;"><img src="/images/dlaczego.jpg" /></div>
<br /><br />Zastanów się: chcesz oszczędzić na comiesięcznych zakupach, zarobić dodatkowe pieniądze, a może rozpocząć karierę w biznesie? FM GROUP oferuje Ci wiele możliwości, a którą opcję wybierzesz i na jakim etapie - zależy tylko od Ciebie. Nie jesteś pewien, czy chcesz zajmować się dystrybucją produktów FM GROUP? Możesz zostać Odbiorcą i kupować wysokiej jakości artykuły, potrzebne każdego dnia, na własny użytek. Zastanawiasz się nad prowadzeniem własnego biznesu? Z FM GROUP nie musisz inwestować dużych pieniędzy, wykupujesz tylko pakiet startowy, który jest Twoim narzędziem pracy.
<br /><br />Z FM GROUP nie jesteś sam. Prowadzisz swój biznes w dogodny dla siebie sposób i sam jesteś sobie szefem, ale możesz również korzystać ze wsparcia, jakiego udziela dynamicznie rozwijająca się firma. FM GROUP dzieli się wiedzą i zdobytym przez lata doświadczeniem, organizując m.in. liczne szkolenia i seminaria dla Dystrybutorów. Dodatkową zachętą są programy motywacyjne, takie jak: „Mercedesem po sukces”.
<br /><br />Współpraca z FM GROUP to nie tylko rozwój zawodowy, ale również osobisty. Masz możliwość prowadzenia biznesu ze swoją rodziną lub przyjaciółmi. Jako Dystrybutor nawiązujesz nowe, liczne relacje oraz umacniasz już istniejące. Z czasem możesz zacząć pomagać innym, przekazywać swoje doświadczenie i umiejętności oraz budować swoją własną strukturę, która będzie pracowała na Wasz wspólny sukces.
</p>
');
}
?>
  </p>
<br /><br />
<?php include('pages/dane.php'); ?>


      
        
    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>