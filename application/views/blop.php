<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

	<div id="container">
	<h3>Upload a picture!</h3>
	<hr />
	<div style="color:red">
		<?php echo validation_errors(); ?>
	<?php if(isset($error)){print $error;}?>
	</div>
	<?php echo form_open_multipart('debug/blop_test/upload');?>
	<div class="form-group">
		<label for="pic_title">Picture Title*:</label>
		<input type="text" class="form-control" name="pic_title" value="<?= set_value('pic_title'); ?>" id="pic_title">
	</div>
	<div class="form-group">
		<label for="pic_desc">Picture Description:</label>
		<textarea name="pic_desc" class="form-control" id="pic_desc"><?= set_value('pic_desc'); ?></textarea>
	</div>
	<div class="form-group">
		<label for="pic_file">Select Image*:</label>
		<input type="file" name="pic_file" class="form-control"  id="pic_file">
	</div>
	<a href="<?=base_url();?>" class="btn btn-warning">Back</a>
	<button type="submit" class="btn btn-success">Submit</button>
	</form>

	<div class="container">
		<main>
			<h1>List data</h1>
			<?php
				echo '
				<table border="1px solid black">
					<thead>
						<tr>
							<td colspan="2" style="text-align: center;">Data</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>';
				foreach($blob_img as $item){
					echo '
					<tr>
						<th>Title</th>
						<td>'. $item->title .'</td>
						<td rowspan="2"><button type="submit" value="submit">Delete</button></td>

					</tr>

					<tr>
						<th>Img</th>
						<td><img src="' . base_url('debug/blop_test/get_image/') .$item->id.'" width="250px;" sty/></td>
					</tr>
					';
				}

				echo '</tbody>
					</table>
					';
			?>
		</main>
	</div>

	

</body>
</html>
