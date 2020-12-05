<?php
require_once('./config.php');
require_once('./global_functions.php');
//page2
switch ($_POST['call']) {
    case 'delete_row_page_2':
        send_pg_query("DELETE FROM savitoji_varza_apskaiciuoti WHERE id = '" . $_POST['id'] . "'");
        break;
    case 'delete_row_page_3':
        send_pg_query("DELETE FROM varza_apskaiciuoti WHERE id = '" . $_POST['id'] . "'");
        break;
    case 'select_graph_data_page_3':
        $data = mfa_kaip_array("SELECT * FROM varza_apskaiciuoti WHERE savitoji_varza = '" . $_POST['svarza'] . "' AND skerspjuvis = '" . $_POST['skerspj'] . "'");
        $i = 0;
        foreach ($data as $record) {
            $varza = $record['varza_result'];
            $ilgis = $record['ilgis'];

            $dataPoints[$i]["ilgis"] = $ilgis;
            $dataPoints[$i]["varza"] = $varza;
            $i++;
        }
        echo json_encode($dataPoints, JSON_NUMERIC_CHECK);
        break;
}
