<html>
	<head>
		<?php
		header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment;filename=".$filename."".".xls");
		header("Cache-Control: private",false);
		?>
	</head>
	<body>
		<table>
			<thead>
                <tr>
                   <th>No</th><th>ID</th><th>Nama</th><th>Alias</th><th>Address</th>
                </tr>
			</thead>
			<tbody>
                <?php $c=0;?>
                <?php foreach($objs as $obj){?>
                <?php $c++;?>
                <tr>
                    <td><?php echo $c;?></td>
                    <td><?php echo $obj->id;?></td>
                    <td><?php echo $obj->name;?></td>
                    <td><?php echo $obj->alias;?></td>
                    <td><?php echo $obj->address;?></td>
                </tr>
                <?php }?>
                <tr>
                </tr>
			</tbody>
		</table>
	</body>
</html>
