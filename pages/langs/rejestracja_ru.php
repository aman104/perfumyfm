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
                        Имя
                    </td>
                    <td><input name="name" type="text" value="<?php echo $_POST['name'] ?>" /></td>
                </tr>

                <?php if($require_msg['name3']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['name3']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Отчество
                    </td>
                    <td><input name="name3" type="text" value="<?php echo $_POST['name3'] ?>" /></td>
                </tr>

                <?php if($require_msg['name2']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['name2']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Фамилия
                    </td>
                    <td><input name="name2" type="text" value="<?php echo $_POST['name2'] ?>" /></td>
                </tr>

                <?php if($require_msg['date']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['date']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Дата рождения *
                    </td>
                    <td><input name="date" placeholder="ДД.ММ.ГГГГ" type="text" value="<?php echo $_POST['date'] ?>" /></td>
                </tr>
                <?php if($require_msg['dowod']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['dowod']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">                        
                        Паспорт: серия, номер *
                    </td>
                    <td><input name="dowod" type="text" value="<?php echo $_POST['dowod'] ?>" /></td>
                </tr>
                <?php if($require_msg['dowod_name']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['dowod_name']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">                        
                        Наименование выдавшего органа 
                    </td>
                    <td><input name="dowod_name" type="text" value="<?php echo $_POST['dowod_name'] ?>" /></td>
                </tr>
                <?php if($require_msg['address']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['address']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Почтовый адрес
                    </td>
                    <td><input name="address" type="text" value="<?php echo $_POST['address'] ?>" /></td>
                </tr>
                <?php if($require_msg['country']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['country']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        страна
                    </td>
                    <td><input name="country" type="text" value="<?php echo $_POST['country'] ?>" /></td>
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
                        
                
                <tr>
                    <td colspan="2">
                        ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ (Заполняется только в том случае если клиент зарегистрирован как ИП)
                    </td>
                <tr>
                <?php if($require_msg['firma']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['firma']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       Наименование фирмы
                    </td>
                    <td><input name="firma" type="text" value="<?php echo $_POST['firma'] ?>" /></td>
                </tr>
                <?php if($require_msg['tin']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['tin']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       ИНН
                    </td>
                    <td><input name="tin" type="text" value="<?php echo $_POST['tin'] ?>" /></td>
                </tr>
                <?php if($require_msg['cat']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['cat']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       КПП
                    </td>
                    <td><input name="cat" type="text" value="<?php echo $_POST['cat'] ?>" /></td>
                </tr>

                <tr>
                    <td class="t_right">
                        Плательщик НДС
                    </td>
                    <td>
                        Да <input type="radio" name="wybor" value="1" />
                        Нет <input type="radio" name="wybor" value="0" />
                    </td>
                <tr>
                

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
                                <option <?php echo ($_POST['type'] == 'Статус клиента') ? 'selected="selected"' : ''; ?> value="Статус клиента">Статус клиента</option>
                                <option <?php echo ($_POST['type'] == 'Стартовый пакет МИНИ') ? 'selected="selected"' : ''; ?> value="Стартовый пакет МИНИ">Стартовый пакет МИНИ</option>
                                <option <?php echo ($_POST['type'] == '100') ? 'selected="selected"' : ''; ?> value="100">100</option>
                                <option <?php echo ($_POST['type'] == '200') ? 'selected="selected"' : ''; ?> value="200">200</option>                               
                                                                           
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
                        (Проверьте введенные данные)
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