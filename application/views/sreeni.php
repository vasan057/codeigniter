<!DOCTYPE html>
<html>
<head>
	<title>Sreeni</title>
</head>
<body>
<CENTER><h3 style="color:green;"><?php echo validation_errors(); ?></h3></CENTER><br>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<form method="post" action="<?php $this->load->helper('url');?>insert">
	<input type="text" name="name"><br><br>
	<input type="email" name="email"><br><br>
	<input type="password" name="password"><br><br>
	<button type="submit">Submit</button>
</form>
</body>
</html>