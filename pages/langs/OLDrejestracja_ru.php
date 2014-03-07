<form action="" method="post">
            <table class="table-form rej-form">
                <tr>
                    <td colspan="2">
                       <h3>Заполните форму Вашими контактными данными</h3>
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
                        Имя и Фамилия
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
                       Aдрес электронной почты
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
                        Контактный телефон
                    </td>
                    <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?>" /></td>
                </tr>
                <?php if($require_msg['pesel']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['pesel']; ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if($require_msg['dowod']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['dowod']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">                        
                        Серия и номер паспорта или удостоверения личности
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
                        Адрес прописки(или регистрации)
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
                       Почтовый адрес
                    </td>
                    <td><input name="address2" type="text" value="<?php echo $_POST['address2'] ?>" /></td>
                </tr>

                
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
                

                <?php if($require_msg['type']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['type']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Род стартового пакета
                    </td>
                    <td>
                        <select id="starterType" name="type">
                            
                                <option value="">-- Выбрать --</option>
                                <option <?php echo ($_POST['type'] == 'Стартовый пакет МИНИ') ? 'selected="selected"' : ''; ?> value="Стартовый пакет МИНИ">Стартовый пакет МИНИ</option>
                                <option <?php echo ($_POST['type'] == '100') ? 'selected="selected"' : ''; ?> value="100">100</option>
                                <option <?php echo ($_POST['type'] == '200') ? 'selected="selected"' : ''; ?> value="200">200</option>
                                                                           
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
                       Вид оплаты (Выбери из списка)
                    </td>
                    <td>
                        <select id="starterPayable" name="payable">                            
                            <option value="płatność gotówką przy odbiorze">Оплата при получении посылки</option>                            
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
                        Замечания
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