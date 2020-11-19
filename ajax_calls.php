

<?php
require_once('./header.php');
//page2
switch($_POST['call']){
    case 'delete_row_page_2':
        send_pg_query("DELETE FROM savitoji_varza_apskaiciuoti WHERE id = '".$_POST['id']."'");
    break;
}