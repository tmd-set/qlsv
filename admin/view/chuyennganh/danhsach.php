<a href="?">&lt;&lt;Back</a>
<a href="?actionCN=them">Thêm Chuyên ngành</a>
<table>
	<tr>
    	<th>Mã</th>
        <th>Tên</th>
        <th></th>
		<th></th>
    </tr>
    <?php
	foreach($arr as $obj)
	{
		?>
        <tr>
        	<td><?php echo($obj->macn);?></td>
            <td><?php echo($obj->tencn);?></td>
            <td><a href="?actionCN=xoa&&macn=<?php echo($obj->macn);?>">Xóa</a></td>
            <td><a href="?actionCN=sua&&macn=<?php echo($obj->macn);?>">Sửa</a></td>
        </tr>
        <?php	
	}
	?>
</table>
