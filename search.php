<?php
    $key=$_GET['q'];
    $array = array();
    include 'config.php';
    $query=mysql_query("select arrival from destination where arrival LIKE '{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['arrival'];
    }
    echo json_encode($array);
?>
