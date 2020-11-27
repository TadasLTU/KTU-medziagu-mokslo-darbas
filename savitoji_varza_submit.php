<?php include('./header.php');?>
<?php dump($_POST);
    
    
    if(isset($_POST['skaiciuojam_varza'])){
     
        if(is_numeric($_POST['savitoji_varza']) && is_numeric($_POST['skerspjuvis']) && is_numeric($_POST['ilgis'])){

            if($_POST['savitoji_varza'] > 0 && $_POST['skerspjuvis'] > 0 && $_POST['ilgis'] > 0){
                $result = $_POST['savitoji_varza'] * $_POST['ilgis'] / $_POST['skerspjuvis'];
    
                send_pg_query("INSERT INTO varza_apskaiciuoti (savitoji_varza, skerspjuvis, ilgis, varza_result) 
                VALUES('".$_POST['savitoji_varza']."', '".$_POST['skerspjuvis']."', '".$_POST['ilgis']."', '".$result."') ");
               
                header('location: page3.php?savitoji_varza='.$_POST['savitoji_varza'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&result='.$result);
            }else{
                header('location: page3.php?savitoji_varza='.$_POST['savitoji_varza'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&error1');
            } 
        }else{
            header('location: page3.php?savitoji_varza='.$_POST['savitoji_varza'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&error2');
        }
    }else{
        if(is_numeric($_POST['itampa']) && is_numeric($_POST['stipris']) && is_numeric($_POST['skerspjuvis']) && is_numeric($_POST['ilgis'])){
            if($_POST['itampa'] > 0 && $_POST['stipris'] > 0 && $_POST['skerspjuvis'] > 0 && $_POST['ilgis'] > 0){
                $result = $_POST['itampa'] / $_POST['stipris'] * $_POST['skerspjuvis'] / $_POST['ilgis'];
    
                send_pg_query("INSERT INTO savitoji_varza_apskaiciuoti (itampa, stipris, skerspjuvis, ilgis, savitoji_varza) 
                VALUES('".$_POST['itampa']."', '".$_POST['stipris']."', '".$_POST['skerspjuvis']."', '".$_POST['ilgis']."', '".$result."') ");
        
                header('location: page2.php?itampa='.$_POST['itampa'].'&stipris='.$_POST['stipris'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&result='.$result);
            }else{
                header('location: page2.php?itampa='.$_POST['itampa'].'&stipris='.$_POST['stipris'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&error1');
            } 
        }else{
            header('location: page2.php?itampa='.$_POST['itampa'].'&stipris='.$_POST['stipris'].'&skerspjuvis='.$_POST['skerspjuvis'].'&ilgis='.$_POST['ilgis'].'&error2');
        }
    }
    
     




?>
<?php include('./footer.php');?>