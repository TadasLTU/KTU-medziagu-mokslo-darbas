<?php
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

function mfa_kaip_array($sql){
    $result = pg_query($GLOBALS['conn'], $sql);
    $rows = [];
    while($row = pg_fetch_array($result))
    {
        $rows[] = $row;
    }
    return $rows;
} 

function gor($sql){
    $result = pg_query($GLOBALS['conn'], $sql);
    $row = pg_fetch_row($result);
    return $row[0];
}
?>
