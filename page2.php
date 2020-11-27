<?php include('./header.php');
$itampa = '';
$stipris = '';
$skerspjuvis = '';
$ilgis = '';
$result = '';
if(isset($_GET['itampa']) && isset($_GET['stipris']) && isset($_GET['skerspjuvis']) && isset($_GET['ilgis']) && isset($_GET['result'])){
    $itampa = $_GET['itampa'];
    $stipris = $_GET['stipris'];
    $skerspjuvis = $_GET['skerspjuvis'];
    $ilgis = $_GET['ilgis'];
    $result = $_GET['result'];
}else{
    $result = '';
}?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 align="center">Savitosios varžos skaičiuotuvas</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="alert" class="alert alert-danger" role="alert" style="display:none">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-3">
                Srovės stipris [I(A)]
            </div>
            <div class="col-3">
                Įtampa [U(V)]
            </div>
            <div class="col-3">
                Skerspjūvis [S(<span>&#13217;</span>)]
            </div>
            <div class="col-3">
                Ilgis [l(m)]
            </div>
        </div>
        <form action="savitoji_varza_submit.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <input type="text" class="required" value="<?=$stipris ?: ''?>" name="stipris" id="stipris"/> 
                    </div>
                    <div class="col-3">
                        <input type="text" class="required" value="<?=$itampa ?: ''?>" name="itampa" id="itampa"/>
                    </div>
                    <div class="col-3">
                        <input type="text" class="required" value="<?=$skerspjuvis ?: ''?>" name="skerspjuvis" id="skerspjuvis"/>
                    </div>
                    <div class="col-3">
                        <input type="text" class="required" value="<?=$ilgis ?: ''?>" name="ilgis" id="ilgis"/>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12" align="center">
                    <input type="submit" id="submit_id" value="Skaičiuoti" class="btn btn-primary">    
                </div>
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-12" align="center" style="display:inline">
               <span id="result"><?php if($result == ''){ echo ' '; } else { ?> <span style="font-size:20px"><b>Savitoji varža</b></span> <?php echo ' = '.$result; } ;?></span>   
            </div>
        </div>
        <?php
        
        $medziagos = mfa_kaip_array("SELECT * FROM savitosios_varzos");
        $musu_medziaga = $medziagos[0];
        foreach($medziagos as $medz){
            if(abs(floatval($medz['savitoji_varza']) - floatval($result)) < abs(floatval($musu_medziaga['savitoji_varza']) - floatval($result))){
                $musu_medziaga = $medz;
            }
        }
        ?>
        <div class="row">
            <div class="col-12" align="center" style="display:inline">
            <?php if($result != ''){
                ?>
                <span style="font-size:20px"><b>Artimiausia medžiaga</b></span><span id="result_1"><?= ' = '. $musu_medziaga['metalas'] .' ('.$musu_medziaga['savitoji_varza'].')'?></span>   
                <?php
            }?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <?php 
                 $columns = array(
                     'stipris' => 'Stipris',
                     'itampa' => 'Įtampa',
                     'skerspjuvis' => 'Skerspjūvis',
                     'ilgis' => 'Ilgis',
                     'savitoji_varza' => 'Savitoji varža'
                     
                 );
                $sql = "SELECT * FROM savitoji_varza_apskaiciuoti";
                autosearch($sql, $columns);?>
            </div>
        </div>
    </div>
    <?php include('./footer.php');?>
<script>


$(document).ready(function() {
    $(document).on('click', '#submit_id', function (e) {
        var required = false;
        $('.required').each(function() {
            if($(this).val() != '' && $.isNumeric($(this).val()) && $(this).val() > 0){
                $(this).css('background-color', 'white');
                $('#alert').css('display', 'none');
            }else{
                $(this).css('background-color', 'red');
                required = true;
            }
        });
        if(required == true){
            $('#alert').css('display', 'block');
            $('#alert').html("Blogi kintamieji");   
            e.preventDefault();
        }
    });

    $(document).on('click', '[id^="delete_"]', function() {
        var id = ($(this).attr('data-foo'));
        $.ajax({
            url:"ajax_calls.php",    //the page containing php script
            type: "post",    //request type,
            data: {id: id, 'call' : 'delete_row_page_2'},
            success:function(result){
                location.reload();
            }
        });
    });
});
    
</script>