<<<<<<< HEAD
<title> Calendário </title>
<body>
<div class="container">

<table class="table table-striped" style ="width:70%" align="center">
  <thead  style="background-color: #AD1C3E; color: white">
		<tr>
			<th>Jornada</th>
			<th>Dia</th>
			<th>Hora</th>
			<th>Local</th>
			<th>Equipas</th>
			<th>Resultado</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	 	foreach($row as $row): ?>
	 		<tr>
	 		<td><?php echo implode('</td><td>', $row); ?></td>
	 		</td>
		<?php endforeach; ?>
	</tbody>

</body></table></div>
=======
<div class="container">
<table class="table table-striped">
  <tr>
    <th> Jornada </th>
    <th> Dia </th>
  </tr>

  <?php foreach( $row as $row):?>
  <tr>
    <td> <?php echo $row['jornada'] ;?> </td>
    <td> <?php echo $row['resultado'] ;?> </td>
  </tr>

<?php endforeach; ?>
</table>
</div>
>>>>>>> b92776a2412db6a94a63f2ffa547b09b4c05ddb9
