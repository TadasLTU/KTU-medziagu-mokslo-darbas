<?php include('./header.php');?>
    <div class="container">
        <span id="id">Page1</span>
        <?php
        $data = array(array(
            '0' => 'array'
            )
        );
        //dump($data);
        // send_pg_query("CREATE TABLE Persons (
        //     id SERIAL,
        //     LastName varchar(255) NOT NULL,
        //     FirstName varchar(255),
        //     Age int,
        //     PRIMARY KEY (ID)
        // );");
        //send_pg_query("INSERT INTO persons (lastname, firstname, age) VALUES('Snieckus', 'Erikas', '22')");
        $data = mfa_kaip_array("SELECT * FROM persons");
        dump($data);
        ?>
    </div>
<?php include('./footer.php');?>