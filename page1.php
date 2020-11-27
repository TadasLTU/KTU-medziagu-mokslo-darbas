<?php include('./header.php');?>
    <div class="container">
        <span id="id">Page1</span>
        <?php
        $data = array(array(
            '0' => 'array'
            )
        );
        //dump($data);
        // send_pg_query("CREATE TABLE varza_apskaiciuoti (
        //     id SERIAL,
        //     savitoji_varza varchar(255) NOT NULL,
        //     skerspjuvis varchar(255) NOT NULL,
        //     ilgis varchar(255) NOT NULL,
        //     varza_result varchar(255) NOT NULL,
        //     PRIMARY KEY (ID)
        // );");
       // send_pg_query("INSERT INTO savitosios_varzos (metalas, savitoji_varza) VALUES('Aliuminis', 0.000000028)");

        //$data = mfa_kaip_array("SELECT * FROM persons");
        //dump($data);
        ?>
    </div>
<?php include('./footer.php');?>