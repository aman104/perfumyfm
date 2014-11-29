            <div id="homepage">

                

                <div id="homepage-left">

                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<h4>FM Group - дополнительная работа для Вас</h4>'; break;
                            case 'en' :
                            case 'en2' :  echo '<h4>FM Group- additional income for you</h4>'; break;
                            default : echo '<h4>FM Group - praca dodatkowa dla Ciebie</h4>';
                        }
                    ?>

                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : 

                                echo '<p>
                                        Если Вы решили сотрудничать с нами , пожалуйста, ознакомьтесь с правилами члена <a href="'.$host.'/regulamin.html">FM Group и заполните регистрационную</a>. форму  <a href="'.$host.'/rejestracja.html">в закладке регистрация</a></b>.
                                    </p>';
                                break;
                            case 'en' : 
                            case 'en2' : 

                                echo '<p>
                                        If you decide to start the co operation, please read the <a href="'.$host.'/regulamin.html">regulations for FM Group</a> members and complete the <a href="'.$host.'/rejestracja.html">registration form</a> – <b>perfumes FM</b>
                                    </p>';
                                break;
                            default : 
                                echo '<p>
                                        Jeżeli są państwo zdecydowani na współpracę z nami prosimy zapoznać się z <a href="'.$host.'/regulamin.html">regulaminem członka FM Group</a>. Oraz wypełnić <a href="'.$host.'/rejestracja.html">formularz rejestracyjny</a> - <b>perfumy fm</b>.
                                    </p>';
                        }
                    ?>

                    

                    

                    <br />

                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<a  style="color: #005ede" href="'.$host.'/dlaczegowarto.html"><h1><span  style="color: #005ede">Почему стоит?</span></h1></a>'; break;
                            case 'en' :
                            case 'en2' :  echo '<a  style="color: #005ede" href="'.$host.'/dlaczegowarto.html"><h1><span style="color: #005ede">Why is it worth?</span></h1></a>'; break;
                            default : echo '<a style="color: #005ede" href="'.$host.'/dlaczegowarto.html"><h1><span style="color: #005ede">Dlaczego warto?</span></h1></a>';
                        }
                    ?>

                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<p class="w">Предлагаем помощь:</p>'; break;
                            case 'en' :
                            case 'en2' :  echo '<p class="w">We propose the assistance :</p>'; break;
                            default : echo '<p class="w">Oferujemy pomoc:</p>';
                        }
                    ?>

                    <?php if($_SESSION['lang'] == 'pl'): ?>
                        <a target="_blank" class="btn_aurile" href="http://www.aurile.pl/ "></a>
                    <?php endif; ?>

                    

                    <ul>

                        <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<li>Для физических лиц</li>'; break;
                            case 'en' :
                            case 'en2' :  echo '<li>For individuals</li>'; break;
                            default : echo '<li>Dla osób prywatnych</li>';
                        }
                        ?>
                        <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<li>Для людей в отрасли'; break;
                            case 'en' :
                            case 'en2' :  echo '<li>For persons from the sectors</li>'; break;
                            default : echo '<li>Dla osób w branży';
                        }
                        ?>

                        <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '
                            <ul>

                                <li><a href="'.$host.'/solaria.html">Парикхмахерство</a></li>

                                <li><a href="'.$host.'/solaria.html">Косметики</a></li>

                                <li><a href="'.$host.'/solaria.html">Солярии</a></li>

                                <li><a href="'.$host.'/solaria.html">И т.д.</a></li>

                            </ul>
                            ';
                            break;
                            case 'en' :
                            case 'en2' :  echo '
                            <ul>

                                <li><a href="'.$host.'/solaria.html">Hairdressing</a></li>

                                <li><a href="'.$host.'/solaria.html">Cosmetics</a></li>

                                <li><a href="'.$host.'/solaria.html">Solariums</a></li>

                                <li><a href="'.$host.'/solaria.html">Others</a></li>

                            </ul>
                            ';
                            break;
                            default : echo '
                            <ul>

                                <li><a href="'.$host.'/solaria.html">Fryzjerstwo</a></li>

                                <li><a href="'.$host.'/solaria.html">Kosmetyki</a></li>

                                <li><a href="'.$host.'/solaria.html">Solaria</a></li>

                                <li><a href="'.$host.'/solaria.html">Kawiarnie, restauracje</a></li>

                                <li><a href="'.$host.'/solaria.html">itd.</a></li>

                            </ul>
                            ';
                        }
                        ?>
                        

                        

                            

                        </li>

                    </ul>

                    

                    <br />

                    

                    <p>

                        <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '

                                Сотрудничество с Нами- это самая лучшая дополнительная работа для Вас. Такого Вам не даст никакая другая компания в мире!<br />

                                <span style="font-weight: bold; color: #A00040;">Вы не обязаны приобретать товар каждый месяц.</span>


                            '; break;
                            case 'en' :
                            case 'en2' :  echo '

                                The cooperation with us- is the best form of <b>the additional income</b>. None of  companies in the world can propose you such great  opportunity. <br />

                                <span style="font-weight: bold; color: #A00040;">You are not obliged to buy goods every month.</span>


                            '; break;
                            default : echo '

                                Współpraca z nami to najlepsza <b>praca dodatkowa</b> dla Ciebie!

                                Tego nie daje żadna inna firma na świecie!<br />

                                <span style="font-weight: bold; color: #A00040;">Nie ma obowiązku kupowania towaru co miesiąc.</span>


                            ';
                        }
                        ?>

                        
                    </p>

                    

                    

                </div>

                <div id="homepage-right">

                    
                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<p class="w">Оставь нам свой номер телефона или адрес электронной почты</p>'; break;
                            case 'en' :
                            case 'en2' :  echo '<p class="w">Leave your mail address here </p>'; break;
                            default : echo '<p class="w">Zostaw swój numer telefonu lub email</p>';
                        }
                        ?>
                    

                    <br />

                    <a class="button button_center button_pytania_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/kontakt.html"></a>

                    <br />

                    <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo '<p class="w">Образцы каталогов  <span>товаров</span></p>'; break;
                            case 'en' :
                            case 'en2' :  echo '<p class="w">Samples of <span>catalogues</span></p>'; break;
                            default : echo '<p class="w">Przykładowe katalogi <span>Produktów</span></p>';
                        }
                        ?>

                        <br />
                    
                        <?php if($_SESSION['lang'] == 'ru'): ?>
                            <a href="<?php echo $host ?>/katalogi.html" style="float: left; margin-left: 20px;" class="cat1_ru ">
                            скачать pdf                                  
                            </a>
                            <a href="<?php echo $host ?>/katalogi.html" style="float: left; margin-left: 40px;" class="cat2_ru ">
                            скачать pdf                                  
                            </a>
                        <?php endif; ?>
                    
<?php if($_SESSION['lang'] == 'pl'): ?>
                    <a href="<?php echo $host ?>/katalogi.html" style="float: left; margin-left: 20px;" class="cat1_pl">
                        <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo 'скачать pdf'; break;
                            case 'en' :
                            case 'en2' :  echo 'download pdf'; break;
                            default : echo 'pobierz pdf';
                        }
                        ?>                                                
                    </a>

                    <a href="<?php echo $host ?>/katalogi.html" style="float: right; margin-right: 20px;" class="cat2_pl">
                        <?php 
                        switch($_SESSION['lang'])
                        {
                            case 'ru' : echo 'скачать pdf'; break;
                            case 'en' :
                            case 'en2' :  echo 'download pdf'; break;
                            default : echo 'pobierz pdf';
                        }
                        ?>  
                    </a> 
<?php endif; ?>

                        <?php if($_SESSION['lang'] == 'en'): ?>
                            <a href="<?php echo $host ?>/katalogi.html" style="margin-left: 35px;" class="cat1_en cat_left">
                            download pdf                                 
                            </a>
                            <a href="<?php echo $host ?>/katalogi.html" style="margin-left: 35px;" class="cat2_en cat_left">
                            download pdf                                
                            </a>
                        <?php endif; ?>

                        <?php if($_SESSION['lang'] == 'en2'): ?>
                            <a href="<?php echo $host ?>/katalogi.html" style="margin-left: 35px;" class="cat1_en2 cat_left">
                            download pdf                                 
                            </a>
                            <a href="<?php echo $host ?>/katalogi.html" style="margin-left: 35px;" class="cat2_en2 cat_left">
                            download pdf                                
                            </a>
                        <?php endif; ?>
                    

                </div>

                

            </div>