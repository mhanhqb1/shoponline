<table>
	<tr>
    	<td>STT</td>
        <td>Username</td>
        <td>Level</td>
    </tr>
    <?php
		$stt = 0;
		foreach($list as $item){
			$stt++;
			echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$item[username]</td>";
				if($item['level'] == 1){
					echo "<td>Member</td>";	
				}else{
					echo "<td>Admin</td>";		
				}
			echo "</tr>";
		}	
	?>
</table>