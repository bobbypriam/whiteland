
				<h1>Isi Jurnal</h1>
				<?php echo form_open('jurnal/submit', array('novalidate'=>'')) ?>
					<?php session_start(); if(isset($_SESSION['user'])): ?>
					<p><small>Telah masuk sebagai Admin. <a href="<?php echo base_url(); ?>index.php/admin/logout/">logout</a></small></p>
					<input type="hidden" name="name" value="Admin">
					<input type="hidden" name="email" value="admin@whiteland.com">
					<?php else: ?>
					<input type="text" name="name" placeholder="Nama"><span class="error"> * <?php if(isset($err_name)) echo $err_name; ?></span>
					<input type="email" name="email" placeholder="Email"><span class="error"> * <?php if(isset($err_email)) echo $err_email; ?></span>
					<?php endif; ?>
					<textarea name="entry" placeholder="Apa pendapatmu tentang Desa Whiteland?"></textarea>
					<button type="submit" class="block" onclick="return confirm('Kirim jurnal?')">Kirim</button>
				</form>

				<h1>Apa yang mereka katakan</h1>
				<p><small>* hanya jurnal yang sudah disetujui admin yang terlihat</small></p> 
				<?php
					foreach($entries->result() as $entry) {
						if ($entry->status == 1) {
							echo '<div class="entri">';
							echo '<span class="big">' . $entry->nama . '</span> ';
							echo '<span class="small email">' . $entry->email . '</span>';
							echo '<span class="jurnal block">' . $entry->entri . '</span>';
							echo '</div>';
						}
					}
				?>

