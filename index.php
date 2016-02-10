<?php
include_once 'dbinfo.php';
include_once 'jsonPrettyPrint.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>webhook_test PHP </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
      <th>Event ID</th>
      <th>Payload</th>
    </tr>
    <?php
       $sql_query="SELECT * FROM events";
       $result_set=mysql_query($sql_query);
       while($row=mysql_fetch_row($result_set))
       {
    ?>
              <tr>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo prettyPrint($row[1]); ?></td>
              </tr>
    <?php
       }
    ?>
    </table>
    </div>
</div>

</center>
</body>
</html>
