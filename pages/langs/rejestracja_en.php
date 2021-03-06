        <form action="" method="post">
            <table class="table-form rej-form">
                <tr>
                    <td colspan="2">
                        <h3>Complete the registration form</h3>
                        <p>(An application for joining the FM GROUP COSMETICS MALAYSIA)</p>
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
                            First Name / Nama (required)
                    </td>
                    <td><input name="name" type="text" value="<?php echo $_POST['name'] ?>" /></td>
                </tr>
                <?php if($require_msg['name2']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['name2']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                            Last Name / Nama Keluarga (required)
                    </td>
                    <td><input name="name2" type="text" value="<?php echo $_POST['name2'] ?>" /></td>
                </tr>
                <?php if($require_msg['ic']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['ic']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                            IC No. / No. IC (required)
                    </td>
                    <td><input name="ic" type="text" value="<?php echo $_POST['ic'] ?>" /></td>
                </tr>
                <?php if($require_msg['email']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['email']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Your Email (required)
                    </td>
                    <td><input name="email" type="text" value="<?php echo $_POST['email'] ?>" /></td>
                </tr>

                <?php if($require_msg['birth']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['birth']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                          Date of Birth / Tarikh Lahir (required)
                    </td>
                    <td><input name="birth" type="text" value="<?php echo $_POST['birth'] ?>" /></td>
                </tr>
                <?php if($require_msg['address']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['address']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Address / Alamat (required)
                    </td>
                    <td><input name="address" type="text" value="<?php echo $_POST['address'] ?>" /></td>
                </tr>
                <?php if($require_msg['city']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['city']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       Town / City / Bandar (required)
                    </td>
                    <td><input name="city" type="text" value="<?php echo $_POST['city'] ?>" /></td>
                </tr>
                <?php if($require_msg['postcode']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['postcode']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       Postcode / Poskod (required)
                    </td>
                    <td><input name="postcode" type="text" value="<?php echo $_POST['postcode'] ?>" /></td>
                </tr>
                <?php if($require_msg['country']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['country']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       Country / Negara (required)
                    </td>
                    <td><input name="country" type="text" value="<?php echo $_POST['country'] ?>" /></td>
                </tr>

                <?php if($require_msg['state']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['state']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                       State (required)
                    </td>
                    <td><input name="state" type="text" value="<?php echo $_POST['state'] ?>" /></td>
                </tr>

                <?php if($require_msg['mobile']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['mobile']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                         Mobile Phone / Telefon Bimbit (required)
                    </td>
                    <td><input name="mobile" type="text" value="<?php echo $_POST['mobile'] ?>" /></td>
                </tr>
                <?php if($require_msg['phone']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['phone']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                         Phone / Telefon
                    </td>
                    <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?>" /></td>
                </tr>
                <?php if($require_msg['text']): ?>
                <tr>
                    <td></td>
                    <td class="error_td"><?php echo $require_msg['text']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td class="t_right">
                        Comments
                    </td>
                    <td>
                        <textarea name="text"><?php echo $_POST['text'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong>All orders will be completed after due amount has been credited to FM bank account in MayBank</strong>
                        <br /><br />
                        After successful registration you must choose and pay for your Starter Kit and provide a copy of your Identity Card.
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
