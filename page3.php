<?php include('./header.php');
$skerspjuvis = '';
$ilgis = '';
$savitoji_varza = '';
$result = '';
if(isset($_GET['savitoji_varza']) && isset($_GET['skerspjuvis']) && isset($_GET['ilgis']) && isset($_GET['result'])){
    $skerspjuvis = $_GET['skerspjuvis'];
    $ilgis = $_GET['ilgis'];
    $result = $_GET['result'];
    $savitoji_varza = $_GET['savitoji_varza'];
}
$medziagos = mfa_kaip_array("SELECT * FROM savitosios_varzos");
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 align="center">Varžos skaičiuotuvas</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="alert" class="alert alert-danger" role="alert" style="display:none">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                Savitoji varža [ρ(<span>&#8486;</span><span>&#183;</span>m</span>)]
            </div>
            <div class="col-4">
                Skerspjūvis [S(<span>&#13217;</span>)]
            </div>
            <div class="col-4">
                Ilgis [l(m)]
            </div>
        </div>
        <form action="savitoji_varza_submit.php" method="post">
        <input type="hidden" name="skaiciuojam_varza" value="0">
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <input type="text" class="required" value="<?=$savitoji_varza ?: ''?>" name="savitoji_varza" id="savit_varza"/>    
                    </div>
                    <div class="col-4">
                        <input type="text" class="required" value="<?=$skerspjuvis ?: ''?>" name="skerspjuvis" id="skerspjuvis"/>
                    </div>
                    <div class="col-4">
                        <input type="text" class="required" value="<?=$ilgis ?: ''?>" name="ilgis" id="ilgis"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <select name="select_medziaga" id="select_medziaga">
                            <option id='empty' <?php ($savitoji_varza == 0) ? 'selected' : '' ?> data-foo="0">...</option>
                            <?php
                             foreach($medziagos as $medz){
                                if($savitoji_varza == $medz['savitoji_varza']){
                                    echo '<option selected=selected data-foo='.$medz['savitoji_varza'].'>'.$medz['metalas'].'</option>'  ;
                                }else{
                                    echo '<option  data-foo='.$medz['savitoji_varza'].'>'.$medz['metalas'].'</option>'  ;
                                }
                            }
                            ?>
                        </select>
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
               <span id="result"><?php if($result == ''){ echo ' '; } else { ?> <span style="font-size:20px"><b>Varža</b></span> <?php echo ' = '.$result.' <span>&#8486;</span>'; } ;?></span>   
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <?php 
                 $columns = array(
                     'savitoji_varza' => 'Savitoji varža (<span>&#8486;</span><span>&#183;</span>m</span>)',
                     'skerspjuvis' => 'Skerspjūvis (<span>&#13217;</span>)',
                     'ilgis' => 'Ilgis (m)',
                     'varza_result' => 'Varža (<span>&#8486;</span>)'
                     
                 );
                $sql = "SELECT * FROM varza_apskaiciuoti";
                $sql1 = "SELECT COUNT(id) FROM varza_apskaiciuoti";
                $exists = gor($sql1);
                if($exists > 0){
                    autosearch($sql, $columns);
                }?>
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
            data: {id: id, 'call' : 'delete_row_page_3'},
            success:function(result){
                location.reload();
            }
        });
    });

    $(document).on('change', '#select_medziaga', function() {
       var id = ($("#select_medziaga :selected").attr('data-foo'));
       $('#savit_varza').val(id);
    });
});
    
</script>