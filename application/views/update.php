<!DOCTYPE html>
<html>
<head>
	<title>Sreeni</title>
</head>
<body>

<form method="post" action="<?php echo $this->config->base_url()?>sreeni/testupdate">
	<input type="text" name="name" value="<?php echo $data->result()[0]->name?>"><br><br>
	<input type="email" name="email" value="<?php echo $data->result()[0]->email?>"><br><br>
	<input type="type" name="password" value="<?php echo $data->result()[0]->password?>"><br><br>
	<input type="hidden" name="id" value="<?php echo $data->result()[0]->sno?>">
	<button type="submit">Submit</button>
</form>
</body>
</html>