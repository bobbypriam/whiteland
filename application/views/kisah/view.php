
			<?php
				$k = $kisah->row_array();
				echo '<div class="entri-kisah reader">';
				echo '<h1 class="judul">' . $k['judul'] . '</h1>';
				echo '<span class="isi block">' . $k['isi'] . '</span>';
				echo '</div>';
			?>
			