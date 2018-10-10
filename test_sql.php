<?php

  $mysqli = pg_connect("host=localhost port=5432 dbname=team1 user=postgres password=root");

  $result = pg_query($mysqli, "select * from pg_stat_activity");
var_dump(pg_fetch_all($result));


  
?>