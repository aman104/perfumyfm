

<div class="page-content">
    
    <div class="page-main">
         <?php echo renderBreadcrumbs($host, $page, $pages); ?>
        
        <?php if($msg): ?>
        <div class="msg msg_<?php echo $msg_class; ?>">
            <?php echo $msg; ?>
        </div>
        <?php endif; ?>
        

        <?php 
            switch($_SESSION['lang'])
            {
                case 'ru' : echo '<h2>Регистрация</h2>'; break;
                default : echo '<h2>Rejestracja</h2>';
            }
        ?>

        
        <form action="" method="post">
            <table class="table-form rej-form">
                <tr>
                    <td colspan="2">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo '<h3>Заполните форму Вашими контактными данными</h3>'; break;
                                default : echo '<h3>Wypełnij formularz swoimi danymi</h3>';
                            }
                        ?>
                        
                    </td>
                </tr>
                <?php if($require_msg['name']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['name']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Имя и Фамилия'; break;
                                default : echo 'Imię i nazwisko';
                            }
                        ?>
                    </td>
                    <td><input name="name" type="text" value="<?php echo $_POST['name'] ?>" /></td>
                </tr>
                <?php if($require_msg['email']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['email']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Aдрес электронной почты'; break;
                                default : echo 'E-mail:';
                            }
                        ?>   
                        
                    </td>
                    <td><input name="email" type="text" value="<?php echo $_POST['email'] ?>" /></td>
                </tr>
                <?php if($require_msg['phone']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['phone']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Контактный телефон'; break;
                                default : echo 'Telefon kontaktowy';
                            }
                        ?> 
                    </td>
                    <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?>" /></td>
                </tr>
                <?php if($require_msg['pesel']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['pesel']; ?></td>
                </tr>
                <?php endif; ?>
                <tr style="<?php if($_SESSION['lang'] == 'ru') echo 'display: none;' ?>">
                    <td class="t_right">PESEL</td>
                    <td><input name="pesel" type="text" value="<?php echo $_POST['pesel'] ?>" /></td>
                </tr>
                <?php if($require_msg['dowod']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['dowod']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Серия и номер паспорта или удостоверения личности'; break;
                                default : echo 'Seria i nr dowodu osobistego';
                            }
                        ?> 
                        
                    </td>
                    <td><input name="dowod" type="text" value="<?php echo $_POST['dowod'] ?>" /></td>
                </tr>
                <?php if($require_msg['address']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['address']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Адрес прописки(или регистрации)'; break;
                                default : echo 'Adres zameldowania';
                            }
                        ?> 
                        
                        
                    </td>
                    <td><input name="address" type="text" value="<?php echo $_POST['address'] ?>" /></td>
                </tr>
                <?php if($require_msg['address2']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['address2']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Почтовый адрес'; break;
                                default : echo 'Adres korespodencyjny';
                            }
                        ?> 
                        
                    </td>
                    <td><input name="address2" type="text" value="<?php echo $_POST['address2'] ?>" /></td>
                </tr>

                <?php if($_SESSION['lang'] == 'ru'): ?>
                    <tr>
                        <td colspan="2">
                            На территории Российской Федерации находится четыре распределительных центров, Вы можете выбрат тот который ближе всего к Вашему месту регистрации.
                        </td>
                    <tr>
                    <tr>
                        <td></td>
                        <td>
                            <select id="type2" name="type2">
                                <option value="Москва">Москва</option>
                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                <option value="Ростов-на-Дону">Ростов-на-Дону</option>
                                <option value="Красноярск">Красноярск</option>
                                <option value="Ижевск">Ижевск</option>
                            </select>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if($require_msg['type']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['type']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Род стартового пакета'; break;
                                default : echo 'Rodzaj startera (wybierz z listy)';
                            }
                        ?>
                        
                    </td>
                    <td>
                        <select id="starterType" name="type">
                            <?php if($_SESSION['lang'] == 'pl'): ?>
                                <option value="">-- wybierz --</option>
                                <option <?php echo ($_POST['type'] == 'Starter MIN') ? 'selected="selected"' : ''; ?> value="Starter MINI">Starter MINI</option>
                                <option <?php echo ($_POST['type'] == 'Starter 100 + 50') ? 'selected="selected"' : ''; ?> value="Starter 100 + 50">Starter 100 + 50</option>
                                <option <?php echo ($_POST['type'] == 'Opcja darmowa - status odbiorcy') ? 'selected="selected"' : ''; ?> value="Opcja darmowa - status odbiorcy">Opcja darmowa - status odbiorcy</option>
                            <?php elseif($_SESSION['lang'] == 'ru'): ?>
                                <option value="">-- Выбрать --</option>
                                <option <?php echo ($_POST['type'] == 'Стартовый пакет МИНИ') ? 'selected="selected"' : ''; ?> value="Стартовый пакет МИНИ">Стартовый пакет МИНИ</option>
                                <option <?php echo ($_POST['type'] == '100') ? 'selected="selected"' : ''; ?> value="100">100</option>
                                <option <?php echo ($_POST['type'] == '200') ? 'selected="selected"' : ''; ?> value="200">200</option>
                            <?php endif; ?>                                                        
                        </select>
                    </td>
                </tr>
                <?php if($require_msg['payable']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['payable']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Вид оплаты (Выбери из списка)'; break;
                                default : echo 'Rodzaj płatności (wybierz z listy)';
                            }
                        ?>
                        
                    </td>
                    <td>
                        <select id="starterPayable" name="payable">
                            <?php if($_SESSION['lang'] == 'pl'): ?>
                                <option value="płatność gotówką przy odbiorze">płatność gotówką przy odbiorze</option>
                                <option value="gratis">gratis</option>
                            <?php elseif($_SESSION['lang'] == 'ru'): ?>
                                <option value="płatność gotówką przy odbiorze">Оплата при получении посылки</option>
                            <?php endif; ?>
                        </select>
                    </td>
                </tr>
                <?php if($require_msg['text']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['text']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        <?php 
                            switch($_SESSION['lang'])
                            {
                                case 'ru' : echo 'Замечания'; break;
                                default : echo 'Uwagi';
                            }
                        ?>
                    </td>
                    <td>
                        <textarea name="text"><?php echo $_POST['text'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="" name="register" class="rejestruj_<?php echo $_SESSION['lang']; ?>" />
                        <input type="hidden" value="1" name="register_true" class="rejestruj" />
                    </td>
                </tr>
            </table>
        </form>
        
        <br />
        

        
    </div>
    
    <?php include('pages/right.php'); ?>
    
</div>