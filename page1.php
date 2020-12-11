<?php include('./header.php');?>
    <div class="container">
        <!-- <span id="id">Page1</span> -->
        <?php
        // $data = array(array(
        //     '0' => 'array'
        //     )
        // );
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

    <h1 style="text-align: center;">Laidininko savitosios varžos nustatymas</h1>
    <p style="text-align: center;">Laboratorinio darbo apra&scaron;ymas</p>

    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-md-8">
        <p style="text-align: left;">&nbsp;</p>
        <p><strong>Darbo užduotis.</strong> Nustatyti laidininko savitąja varžą remiantis Omo dėsniu.</p>
        <p><strong>Teorinio pasirengimo klausimai</strong>. Klasikinės elektroninės metalų elektrinio laidumo teorijos pagrindai. Laidininko ominė varža. Savitoji varža.</p>
        
        <p><strong>Teorinė dalis</strong>. Metalai yra geri elektros ir &scaron;ilumos laidininkai. Tai rodo, kad elektros krūvį ir &scaron;ilumą perne&scaron;a tie patys ne&scaron;ikliai &ndash; laisvieji elektronai. Pagal klasikinę elektroninę metalų laidumo teoriją, metalo atomų valentiniai elektronai kristale nesuri&scaron;ti su konkrečiu atomu, todėl laisvai juda po visą metalo tūrį. &Scaron;io chaoti&scaron;ko judėjimo vidutinis greitis  v  ~ T ir kambario temperatūroje didesnis už 100 km/s. Sudarius elektrinį lauką, jo veikiami elektronai ima dreifuoti kryptingai &ndash; teka elektros srovė. &Scaron;io elektronų judėjimo vidutinis greitis tik apie 10-4 m/s. <br />Metalams gerai tinka Omo dėsnis: vienalytei grandinės daliai srovės stipris I tiesiog proporcingas tos dalies įtampai U ir atvirk&scaron;čiai proporcingas tos dalies ominei varžai R, t.y. R U I  .</p>
        <p>(1) Laidininko varža priklauso nuo jo matmenų, temperatūros, medžiagos rū&scaron;ies bei jos būsenos ir lygi   d 0    S R ;</p>
        <p>(2) čia  &ndash; savitoji varža, priklausanti nuo medžiagos rū&scaron;ies bei jos būsenos ir temperatūros. I&scaron; čia vienalyčio vienodos temperatūros ir vienodo skerspjūvio ploto S ilgio  laidininko ominė varža S R    .</p>
        <p>(3) Pagal klasikinę metalų elektroninio laidumo teoriją savitoji varža        e n me 2 2 v ;</p>
        <p>(4) čia me &ndash; elektrono masė, e &ndash; jo krūvis, n &ndash; valentinių (laisvųjų) elektronų koncentracija, &lt;  &gt; &ndash; vidutinis elektrono laisvojo kelio ilgis. Nė vienas &scaron;ių dydžių nepriklauso nuo elektrinio lauko stiprio, o tuo pačiu nuo įtampos. Pagal &scaron;ią teoriją tik dydis &lt; v &gt; priklauso nuo temperatūros ir yra proporcingas T .</p>
        <p>Taigi pagal ją dydis , o tuo pačiu ir varža R, turėtų kisti proporcingai T .</p>
        <p>Darbo apra&scaron;ymas. Laboratorinio darbo maketą sudaro maitinimo &scaron;altinis 1, multimetras, 2, skirtingų medžiagų bandiniai 3. Bendras darbo vaizdas pateiktas 1 pav. Medžiagų bandiniai yra: skirtingo skersmens varinė viela; skirtingo ilgio plieninė viela. Matavimus su jais rekomenduojama atlikti poromis, t.y. varis ir plienas.</p>
        <p><b>Darbo eiga:</b>
        <p>1. Maitinimo &scaron;altinio srovės rankenėles nustatome į mažiausios srovės padėtį (iki galo prie&scaron; laikrodžio rodyklę). Įtampos rankenėles į didžiausios įtampos padėtį (iki galo pagal laikrodžio rodyklę). </p>
        <p>2. Laboratoriniais krokodilais prie matavimo sistemos prijungiame pirmąjį pasirinktą bandinį. </p>
        <p>3. Įjungiame maitinimo &scaron;altinį ir multimetrą. Multimetrą nustatome į įtampos (mV) matavimo režimą. Srovė atskaitoma &scaron;altinio indikatoriuje; įtampa multimetre. </p>
        <p>4. Nustatome pasirinktas (arba dėstytojo nurodytas) srovės vertes ir atitinkamas įtampos vertes įra&scaron;ome į 1 lentelę. Pasižymime bandinio parametrus </p>
        <p>5. Matavimus pakartojame su likusiais bandiniais 1 lentelė. U, mV I, A R, Ω U, mV I, A R, Ω U, mV I, A R, Ω U, mV I, A R, Ω </p>
        <p>6. Apskaičiuojame eksperimentines bandinių savitąsias varžas &lt;&rho;eks&gt; (3 formulė) naudojant vidutinę bandinio varžos vertę . Palyginame su teorinėmis bandinių savitosiomis varžomis, apskaičiuojame santykinę paklaidą &delta;. &lt;&rho;eks&gt; &rho;teor &delta; &lt;&rho;eks&gt; &rho;teor &delta; &lt;&rho;eks&gt; &rho;teor &delta; &lt;&rho;eks&gt; &rho;teor &delta;</p>
        <!-- <p>Kontroliniai klausimai</p> -->
        <!-- <p>1. Kokie svarbiausi klasikinės elektroninės metalų elektrinio laidumo teorijos teiginiai ? <br />2. Nuo ko priklauso metalų savitoji elektrinė varža pagal kvantinę teoriją ?<br />3. Kokia bendroji laidininko ominės varžos formulė ?</p> -->
    </div>
    <div class="col-sm-2"></div>
    </div>
<?php include('./footer.php');?>