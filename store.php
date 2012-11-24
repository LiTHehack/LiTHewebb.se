<?php require('templates/header.php') ?>
				
	<h2>Detta är affären!</h2>
	<p>Här är listan på saker man kan köpa:</p>
	
	<?php 

		$query = "SELECT * FROM p";
		$result = mysql_query($query);

		echo "<table id='parts-table'>";
		echo "<tr><th>Part</th><th>Color</th></tr>";
		while($row = mysql_fetch_array($result)){

			// bra grej!
			// echo '<pre>';
			// print_r($row);
			// echo '</pre>';
			
			echo "<tr class='part'><td>".$row['pname']."</td><td>".$row['color']."</td></tr>";

		}
		echo "</table>";

	?>
	
<script type="text/javascript" src="js/itemSelect.js"></script>
				
<?php require('templates/footer.php') ?>
