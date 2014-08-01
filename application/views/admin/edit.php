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
				<?php 
					$e = $entry->row_array();
				?>
				<h1>Edit Kisah</h1>
					<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
					<script type="text/javascript">
					tinymce.init({
					    selector: "textarea"
					 });
					</script>
					<?php echo form_open('admin/edit/'.$e["id"].'', array('novalidate'=>'','class'=>'align-center')) ?>
					<input type="text" name="judul" placeholder="Judul" class="block center" value="<?php echo $e['judul']; ?>">
					<textarea name="isi" class="block center" value=""><?php echo $e['isi']; ?></textarea>
					<button type="submit" onclick="return confirm('Finished editing?')">Save</button>
					</form>
				</div>
			</div> <!-- container -->
		</div> <!-- content -->
                
		<!--<script type="text/javascript" src="js/script.js"></script>-->
        </body>
</html>