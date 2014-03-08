        <form action="" method="post">
            <table class="table-form rej-form">
                <tr>
                    <td colspan="2">
                        <h3>Wypełnij formularz swoimi danymi</h3>
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
                            Imię i nazwisko
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
                        E-mail
                    </td>
                    <td><input name="email" type="text" value="<?php echo $_POST['email'] ?>" /></td>
                </tr>
                <?php if($require_msg['dataur']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['dataur']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Data urodzenia
                    </td>
                    <td><input name="dataur" placeholder="DD-MM-RRRR" type="text" value="<?php echo $_POST['dataur'] ?>" /></td>
                </tr>
                <?php if($require_msg['phone']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['phone']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Telefon kontaktowy
                    </td>
                    <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?>" /></td>
                </tr>
                <?php if($require_msg['pesel']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['pesel']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
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
                       Seria i nr dowodu osobistego
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
                        Adres zameldowania
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
                        Adres korespodencyjny
                    </td>
                    <td><input name="address2" type="text" value="<?php echo $_POST['address2'] ?>" /></td>
                </tr>

                <?php if($require_msg['type']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['type']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Rodzaj startera (wybierz z listy)
                    </td>
                    <td>
                        <select id="starterType" name="type">

                                <option value="">-- wybierz --</option>
                                <option <?php echo ($_POST['type'] == 'Starter MIN') ? 'selected="selected"' : ''; ?> value="Starter MINI">Starter MINI</option>
                                <option <?php echo ($_POST['type'] == 'Starter 100 + 50') ? 'selected="selected"' : ''; ?> value="Starter 100 + 50">Starter 100 + 50</option>
                                <option <?php echo ($_POST['type'] == 'Opcja darmowa - status odbiorcy') ? 'selected="selected"' : ''; ?> value="Opcja darmowa - status odbiorcy">Opcja darmowa - status odbiorcy</option>

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
                       Rodzaj płatności (wybierz z listy)
                    </td>
                    <td>
                        <select id="starterPayable" name="payable">

                                <option value="płatność gotówką przy odbiorze">płatność gotówką przy odbiorze</option>
                                <option value="gratis">gratis</option>

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
                        Uwagi
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
