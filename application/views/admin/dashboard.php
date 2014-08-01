<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.js"></script>
		<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/layout.js"></script>-->
	</head>
	<body>
		
		<nav>
			<div class="container">        
				<h1>Hello, Admin</h1>
				<a href="<?php echo base_url(); ?>index.php/admin/logout/" class="nav">Logout</a>
			</div> <!-- container -->
		</nav> <!-- navbar -->
		
		<div id="content">
			<div class="container">
				
				<h1>Dashboard</h1>
								
				<div id="jurnal">
					<h1>Jurnal</h1>
					<?php
						echo '<table cellpadding=5>';
						echo '<tr><th>Nama</th><th>Email</th><th>Jurnal</th><th>Status</th><th>Delete</th></tr>';
						foreach($entries->result() as $entry) {
							echo '<tr><td> ' . $entry->nama . '</td>';
							echo '<td>' . $entry->email . '</td>';
							echo '<td>' . $entry->entri . '</td>';
							if ($entry->status == 0)
								echo '<td><a href="' . base_url() . 'index.php/admin/approve/' . $entry->id . '" onclick="return confirm(\'Are you sure you want to approve this entry?\')">approve</a></td>';
							else
								echo '<td><em>approved<em></td>';
							echo '<td><a href="' . base_url() . 'index.php/admin/delete/' . $entry->id . '" onclick="return confirm(\'Are you sure you want to delete this entry?\')">delete</a></td></tr>';
						}
						echo '</table>';
					?>
				</div>

				<div id="kisah">
					<h1>Kisah</h1>
					<?php
						foreach($kisah->result() as $k) {
							echo '<div class="entri-kisah">';
							echo '<span class="judul">' . $k->judul . '</span>';
							echo ' <a target="_blank" href="' . base_url() . 'index.php/kisah/' . $k->slug . '">view</a>';
							echo ' <a href="' . base_url() . 'index.php/admin/edit_post/' . $k->slug . '" onclick="return confirm(\'Edit this post?\')">edit</a>';
							echo ' <a href="' . base_url() . 'index.php/admin/deletekisah/' . $k->id . '" onclick="return confirm(\'Are you sure you want to delete this entry?\')">delete</a>';
							echo '</div>';
						}
					?>
					
					
					<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
					<script type="text/javascript">
					tinymce.init({
					    selector: "textarea"
					 });
					</script>
					<h1>Post Kisah</h1>
					<?php echo form_open('admin/post', array('novalidate'=>'','class'=>'align-center')) ?>
					<input type="text" name="judul" placeholder="Judul" class="block center">
					<textarea name="isi" class="block center"></textarea>
					<button type="submit" onclick="return confirm('Post this story?')">Post</button>
					</form>
				</div>
			</div> <!-- container -->
		</div> <!-- content -->
                
		<!--<script type="text/javascript" src="js/script.js"></script>-->
        </body>
</html>