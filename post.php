<?php
include_once("dbconnection.php");

$sql_select="SELECT * FROM posts ORDER BY posted DESC";

$returned_resource=mysql_query($sql_select) or die("error..");

if ( mysql_num_rows ($returned_resource) == 0 ){
	echo ('<h3>There are no posts to display right now!</h3>');
}
else
{

	while( $row = mysql_fetch_assoc($returned_resource) ){
		?>
		
		<div style="color: #333; border: 1px solid #CCC; background-color: #FFF; padding: 1px; margin: 1px 2px;">
		
		<?php
		//for the profilepic from snetwork which should be only one for a user..

		$sql="SELECT * FROM snetwork WHERE username='{$row['username']}'";
		$returned=mysql_query($sql);
	$rows=mysql_fetch_assoc($returned);

	
	echo '<table>';
				echo '<tr>';
						echo "<td width='55'><img src='{$rows['image']}' width='50px'/></td>";
						echo '<td><b>'.$row['username'].'</b><br>';
						echo htmlentities($row['post']).'<br>';
						echo '<em style="color: #999;">' . date('D, d M Y H:i:s', $row['posted']) . '</em></td>';
						
				echo '</tr>';
					
						if( $row['photo'] )
						{
						echo '<tr><td colspan="2">';
						echo "<img style='margin-left: 10px; border: 1px solid #999; padding: 3px;' src='{$row['photo']}' width='300px' />";
						echo '</td></tr>';
						}
		
		// TO VEIW COMMENT
		$id=$row['id'];

		include("commentveiw.php");
	
			echo '</table>';
	echo'</div>';
}
}


?>