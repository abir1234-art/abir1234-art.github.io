
<html>
<head>
    <title>Generate PDF using Dompdf</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
	<div class="container box">
		<h2 class="text-center text-primary">Generate PDF using Dompdf</h3>
		<br />
		<?php
		if(isset($customer_data))
		{
		?>
			<table class="table table-bordered table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>View</th>
					<th>View in PDF</th>
				</tr>
			<?php
			foreach($customer_data->result() as $row)
			{
				echo '
				<tr>
					<td>'.$row->UserID.'</td>
					<td>'.$row->Nom.'</td>
					<td><a href="'.base_url().'/pdfcontroller/details/'.$row->UserID.'">View</a></td>
					<td><a href="'.base_url().'/pdfcontroller/pdfdetails/'.$row->UserID.'">View in PDF</a></td>
				</tr>
				';
			}
			?>
			</table>
		<?php
		}
		if(isset($customer_details))
		{
			echo $customer_details;
		}
		?>
	</div>
</body>
</html>