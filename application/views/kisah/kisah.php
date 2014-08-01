
			<h1>Daftar Kisah</h1>
			<?php
				$this->load->helper('text');
				foreach($kisah->result() as $k) {
					echo '<div class="entri reader">';
					echo '<span class="judul big"><a href="' . base_url() . 'index.php/kisah/' . $k->slug . '/">' . $k->judul . '</a></span>';
					$chunk = word_limiter($k->isi, 30);
					echo '<span class="chunk">' . $chunk . '</span>';
					echo ' <a href="' . base_url() . 'index.php/kisah/' . $k->slug . '/" class="small block readmore">selengkapnya &rarr;</a>';
					echo '</div>';
				}
			?>
			