<?php
			$query="SELECT * FROM info ORDER BY date;";
			$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {
   $title = $row['title'];
   $info = $row['infos'];
   }
            
            echo"<h2 align='center'><u>". $title."</u></h2>";			
			echo"<font face='arial' size='2' color='black' >";
			echo"<p align='center'>";
			echo $info;
			echo"</p>";			
			?>