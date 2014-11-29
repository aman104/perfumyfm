    <head>
        
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

        <?php
        switch($_SESSION['lang'])
        {
            case 'ru' : echo '<title>FM Group- самая лучшая дополнительная работа для Вас- работа и духи</title>'; break;
            case 'en' :
            case 'en2' :  echo '<title>FM GROUP – Buy at  wholesale price become the distributor and earn - FM  perfumes </title>'; break;
            default : echo '<title>FM Group - perfumy fm - najlepsza praca dodatkowa dla Ciebie - praca</title>';
        }
        ?>

		<meta name="description" content="FM GROUP praca dodatkowa - + 48 507 759 582 -dla każdego - kupuj i sprzedawaj produkty perfumeryjne. Oferujemy ponad 160 zapachów - odpowiedników markowych perfum. Zapraszamy." />
		
		<meta name="keywords" content="FM group, praca dodatkowa, perfumy fm, współpraca fm, praca dorywcza, mlm, marketing sieciowy" />
        <link rel="stylesheet" href="<?php echo $host ?>/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $host ?>/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $host ?>/css/lightbox.css" />
        <script type="text/javascript" src="<?php echo $host ?>/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo $host ?>/js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo $host ?>/js/main.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo $host ?>/css/jquery.cookiebar.css" />
        <script type="text/javascript" src="<?php echo $host ?>/js/jquery.cookiebar.js"></script>

        <?php if($_SESSION['lang'] == 'pl'): ?>
          <script>
          $(function() {
            $.cookieBar({
              message: 'Strona korzysta z plików cookies w celu realizacji usług zgodnie z <a href="/cookies.html">Polityką prywatności.</a>',
              acceptText: 'Rozumiem',
            });
          });            
          </script>
        <?php endif; ?>

<?php if($_SERVER['SERVER_NAME'] == 'fmcosmetics-malaysia.com'): ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43039873-1', 'fmcosmetics-malaysia.com');
    ga('send', 'pageview');

  </script>

<?php elseif($_SERVER['SERVER_NAME'] == 'fmgroup-world.pl'): ?>  
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43771418-1']);
    _gaq.push(['_setDomainName', 'fmgroup-world.pl']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
<?php else: ?>
  
  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37031113-1']);
    _gaq.push(['_setDomainName', 'fmgroup-world.ru']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

<?php endif; ?>
    </head>