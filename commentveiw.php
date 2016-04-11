<?php
  $sql="SELECT * FROM comment1 WHERE id_post=$id";
  $resource=mysql_query($sql);
  $num=mysql_num_rows($resource);
  if($num!=0){

  while($com = mysql_fetch_assoc($resource))
		{  
		
		//echo '<table style="margin-left:60px;">';
		echo '<tr>';
				echo "<td>.{$com['username']}:</td>";
				echo '<td>';
				echo htmlentities($com['comment']).'</td>';
		echo '</tr>';
		//echo'</table>';
		
		}
		}
		
			echo '<tr>';
			echo "<td width=55><img src='{$_SESSION['image']}' width=50px /></td>";
					
?>				
<td><form method="post" action="comment.php?id=<?php echo $id;?>"><textarea type="text" name="comment" rows=1 cols=40 placeholder="what you say?"></textarea><input type="submit" name="submit" value="post"/></form></td></tr>