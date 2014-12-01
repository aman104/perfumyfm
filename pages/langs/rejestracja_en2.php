<form action="" method="post">
    <table class="table-form rej-form">
        <tr>
            <td colspan="2">
                <h3>Complete the registration form</h3>
                <p>Register ON-LINE (An application for joining the FM GROUP INDONESIA)
                <br /><br />
				Start now your own business without any financial risk, absolute freedom of choice, no commitment, no obligation. Take the first step today. If you want to get somewhere, you first need to get started.</p>
				<br />
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
                    Nama Lengkap (wajib)
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
                Your Email (wajib)
            </td>
            <td><input name="email" type="text" value="<?php echo $_POST['email'] ?>" /></td>
        </tr>
       
        <?php if($require_msg['ktp']): ?>
        <tr>
            <td></td>
            <td class="error_td"><?php echo $require_msg['ktp']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="t_right">
                No. KTP / paspor / kitas (wajib)
            </td>
            <td><input name="ktp" type="text" value="<?php echo $_POST['ktp'] ?>" /></td>
        </tr>
        
        <?php if($require_msg['birth']): ?>
        <tr>
            <td></td>
            <td class="error_td"><?php echo $require_msg['birth']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="t_right">
                  Tanggal Lahir  (wajib)
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
                Alamat Koresponden  (wajib)
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
               Kota - Propinsi (wajib)
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
               Kode Pos
            </td>
            <td><input name="postcode" type="text" value="<?php echo $_POST['postcode'] ?>" /></td>
        </tr>
        <?php if($require_msg['mobile']): ?>
        <tr>
            <td></td>
            <td class="error_td"><?php echo $require_msg['mobile']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="t_right">
                 No.Handphone (wajib)
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
                 Telp. Rumah / Kantor 
            </td>
            <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?>" /></td>
        </tr>

        <?php if($require_msg['type']): ?>
        <tr>
            <td></td>
            <td class="error_td"><?php echo $require_msg['type']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="t_right">
                Pilihan Paket Joining (wajib)
            </td>
            <td>
                <select id="starterType" name="type">
                        <option value="Business Package Orchid - Rp 1.000,000">Business Package Orchid - Rp 1.000,000</option>
						<option value="Business Package Magnolia - Rp 820.000">Business Package Magnolia - Rp 820.000</option>
						<option value="Beginner Package Orchid- Rp 605.000">Beginner Package Orchid- Rp 605.000</option>
						<option value="Beginner Package Magnolia - Rp 425.000">Beginner Package Magnolia - Rp 425.000</option>
						<option value="User Package Orchid - Rp 385.000">User Package Orchid - Rp 385.000</option>
						<option value="User Package Magnolia - Rp 330.000">User Package Magnolia - Rp 330.000</option>                                           
                </select>
            </td>
        </tr>       
        
        <tr>
        	<td colspan="2">
        	<br />
<p><strong> User Package Magnolia - Rp 330.000</strong> (you get: Starter Kit 5 contoh, 2 btl Classic collection, 36,72 poin)<br>
<strong>User Package Orchid - Rp 385.000</strong> (you get: Starter Kit 5 contoh, 1 btl Luxury collection, 1 btl Classic collection, 41,86 poin)<br>
<strong>Beginner Package Magnolia - Rp 425.000</strong> (you get: Starter Kit 30 contoh, 1 btl Classic collection, 18,36 poin)<br>
<strong>Beginner Package Orchid - Rp 605.000</strong> (you get: Starter Kit 30 contoh, 1 btl Luxury collection, 1 btl Classic collection, 41,86 poin)<br>
<strong>Business Package Magnolia - Rp 820.000</strong> (you get: Starter Kit 100 contoh, 1 btl Classic collection, 18,36 poin)<br>
<strong>Business Package Orchid - Rp 1.000,000</strong> (you get: Starter Kit 100 contoh, 1 btl Luxury collection, 1 btl Classic collection, 41,86 poin)</p>
        	<br />
        	<p><strong>Syarat Menjadi Distributor</strong><br>
Untuk dapat bergabung dalam kegiatan penjualan langsung produk-produk FM GROUP dan untuk mendapatkan kesempatan mensponsori anggota-anggota baru FM GROUP, calon distributor diharuskan membeli sebuah starter kit.<br>
Saya setuju untuk menjadi anggota FM GROUP Indonesia dengan hak penuh dan membeli starterkit yang didalamnya termasuk contoh presentasi produk termasuk katalog, marketing plan, formulir pendaftaran, peraturan perusahaan dan sarana promosi lainnya. *</p>
        	</td>

        </tr>

        <tr>
        	<td colspan="2">
        		<strong>Metode Pengambilan*</strong>
        		<br />
        		<input type="checkbox" name="Ambil_di_Kantor" /> Ambil di Kantor (Jakarta/Yogya/Manado)
        		<br />
        		<input type="checkbox" name="Kirim_ke" /> Kirim ke
        		<br /><br />
        		<strong>Metode Pembayaran*</strong><br />
        		<input type="checkbox" name="Transfer_Bank" />Transfer Bank
        		&nbsp;&nbsp;
        		<input type="checkbox" name="Tunai di Kantor" />Tunai di Kantor
        		<br /><br />
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
                Catatan/Permintaan Khusus:
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
