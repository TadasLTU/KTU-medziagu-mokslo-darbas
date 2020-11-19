<?php include('./header.php');?>
<?php dump($_POST);
    $result = $_POST['itampa'] / $_POST['stipris'] * $_POST['skerspjuvis'] / $_POST['ilgis'];
    send_pg_query("INSERT INTO savitoji_varza_apskaiciuoti (itampa, stipris, skerspjuvis, ilgis, savitoji_varza) 
    VALUES('".$_POST['itampa']."', '".$_POST['stipris']."', '".$_POST['skerspjuvis']."', '".$_POST['ilgis']."', '".$result."') "); 
    header('location: page2.php?itampa='.$_POST['itampa'].'&stipris='.$_POST['stipris'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&result='.$result);
?>
<?php include('./footer.php');?>