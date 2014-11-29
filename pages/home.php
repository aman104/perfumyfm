        <div id="home">

            <div class="container">

                <div class="container" style="position: relative; height: 400px;">

                    <div class="box_home" id="box_home1">

                        <h2>
                            <?php 
                                switch($_SESSION['lang'])
                                {
                                    case 'ru' : echo 'Покупайте по цене производителя'; break;
                                    case 'en' :
                                    case 'en2' :  echo 'Buy at the producer’s price '; break;
                                    default : echo 'Kupuj po cenach producenta';
                                }
                            ?>

                        </h2>

                        <div>

                            <?php 
                                switch($_SESSION['lang'])
                                {
                                    case 'ru' : echo '<b>Вы можете купить<br /> любые духи FM Group<br /> по оптовых ценах</b>'; break;
                                    case 'en' :
                                    case 'en2' :  echo '<b>The best way to save 30 % on FM products for personal usage.</b> <br /> <a href="'.$host.'/customer.html">Preferred Customer</a>'; break;
                                    default : echo '<b>Najlepszy sposób aby mieć produkty FM dla siebie <br /> <a href="'.$host.'/ceny.html">TANIEJ o 43% MARŻY</a></b>';
                                }
                            ?>
                            

                        </div>

                        <a class="button button_center button_ceny2_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/rejestracja.html"></a>

                    </div>



                    <div class="box_home" id="box_home2">

                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo '<h2 style="font-size: 20px;">Зарабатывай деньги <br /> на продаже духов</h2>'; break;
                                case 'en' :
                                case 'en2' :  echo '<h2>Earn  from  perfums sale<h2>'; break;
                                default : echo '<h2>Zarabiaj na <br />sprzedaży perfum</h2>';
                            }
                        ?>                       

                        <div>

                            <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo '<b>Вы можете зарабатывать<br /> на продаже и посредничестве при продаже духов FM Group</b>'; break;
                                case 'en' :
                                case 'en2' :  echo '<b>You can earn from sale and  dealership of FM Group  perfums</b>'; break;
                                default : echo '<b>Możesz zarabiać <br />na sprzedaży i pośrednictwie<br />perfum FM Group</b>';
                            }
                            ?>   


                            

                        </div>

                        <a class="button button_center button_jak_<?php echo $_SESSION['lang']; ?>" href="<?php echo $host ?>/jakzarabiac.html"></a>

                    </div>

                </div>

            </div>

        </div>