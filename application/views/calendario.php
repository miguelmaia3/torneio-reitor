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
