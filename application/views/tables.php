<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
<table>
<div>
	<?php
			echo $this->session->flashdata('item');
	?>
</div>
	<thead>
		<th>NO</th>
		<th>Name</th>
		<th>email</th>
		<th>Action</th>
	</thead>
	<?php foreach ($table->result() as $row)
	{
	?>
	<tbody>
		<td><?php echo $row->sno?></td>
		<td><?php echo $row->name?></td>
		<td><?php echo $row->email?></td>
		<td><a href="<?php $this->load->helper('url');?>edit/<?php echo $data = $row->sno?>">edit </a></td>
		<td><a href="<?php $this->load->helper('url');?>delete/<?php echo $data = $row->sno?>">delete </a></td>
	</tbody>
	<?php }?>
</table>
</body>
</html>