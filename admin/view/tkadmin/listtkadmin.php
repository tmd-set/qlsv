<a href="?">&lt;&lt;Back</a>
<a href="?actionTkAdmin=them">Thêm Admin</a>
<table>
	<tr>
    	<th>Mã tài khoản</th>
        <th>Username</th>
        <th>Pass</th>
		<th>Phân quyền</th>
        <th></th>
		<th></th>
    </tr>
    <?php
	foreach($arr as $tk)
	{
		?>
        <tr>
        	<td><?php echo($tk->matk);?></td>
            <td><?php echo($tk->username);?></td>
            <td><?php echo($tk->pass);?></td>
			<td><?php echo($tk->phanquyen);?></td>
            <td><a href="?actionTkAdmin=xoa&&matk=<?php echo($tk->matk);?>">Xóa</a></td>
            <td><a href="?actionTkAdmin=Sua&&matk=<?php echo($tk->matk);?>">Sửa</a></td>
        </tr>
        <?php	
	}
	?>
</table>

