<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

<br>

<?php// echo $upload_data['full_path']; ?> 

<br>

		<?php 	
$newdata = array(
                   'picturepath'  =>  $upload_data['full_path']
                 
               );

			$this->session->set_userdata($newdata);
			?>

			<?php //print_r($this->session->all_userdata()); ?>

			<br><br><Br>


			<?php echo $this->session->userdata('filename'); 
			echo $this->session->userdata('p_id'); ?>
</body>
</html>