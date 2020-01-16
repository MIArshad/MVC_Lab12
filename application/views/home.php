<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/css/custom.css">
</head>
<body>

  <?php
  echo '<table>
          <tr>
            <td><h2>This is the table title</h2></td>
          <tr>';
  foreach($tableData as $data)
  {
    echo '<tr><td>'.$data.'</td></tr>';
  }
  echo '</table>';
?>
</body>
</html>
