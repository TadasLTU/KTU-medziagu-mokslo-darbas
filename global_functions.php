<?php

//grazenis var_dump
function dump($data) {
  if(is_array($data)) { //If the given variable is an array, print using the print_r function.
      print "<pre>-----------------------\n";
      print_r($data);
      print "-----------------------</pre>";
  } elseif (is_object($data)) {
      print "<pre>==========================\n";
      var_dump($data);
      print "===========================</pre>";
  } else {
      print "=========&gt; ";
      var_dump($data);
      print " &lt;=========";
  }
} 


//grazina array is query, gerai naudot veliau dump(rezultata) 
function mfa_kaip_array($sql){
    $result = pg_query($GLOBALS['conn'], $sql);
    while($row = pg_fetch_array($result))
    {
        $rows[] = $row;
    }
    return $rows;
} 

//query siuntimas i db
function send_pg_query($sql){
    pg_send_query($GLOBALS['conn'], $sql);
}

//siuncia inserta nurodzius lenteles pavadinima ir duomenu masyva
function send_pg_insert($table_name, $data) {
    pg_insert($GLOBALS['conn'], $table_name, $data);
}

//vienam recordui ir vienam laukui is duombazes pasiimt, paduodi query i parametrus
function gor($sql){
    $result = pg_query($GLOBALS['conn'], $sql);
    $row = pg_fetch_row($result);
    return $row[0];
}
?>
