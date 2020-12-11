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
        <!-- <p style="text-align: left;">&nbsp;</p>
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
        <p>6. Apskaičiuojame eksperimentines bandinių savitąsias varžas &lt;&rho;eks&gt; (3 formulė) naudojant vidutinę bandinio varžos vertę . Palyginame su teorinėmis bandinių savitosiomis varžomis, apskaičiuojame santykinę paklaidą &delta;. &lt;&rho;eks&gt; &rho;teor &delta; &lt;&rho;eks&gt; &rho;teor &delta; &lt;&rho;eks&gt; &rho;teor &delta; &lt;&rho;eks&gt; &rho;teor &delta;</p> -->
        <!-- <p>Kontroliniai klausimai</p> -->
        <!-- <p>1. Kokie svarbiausi klasikinės elektroninės metalų elektrinio laidumo teorijos teiginiai ? <br />2. Nuo ko priklauso metalų savitoji elektrinė varža pagal kvantinę teoriją ?<br />3. Kokia bendroji laidininko ominės varžos formulė ?</p> -->
    </div>

<style type="text/css">

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 58px 0px 12px 76px;padding: 0px;border: none;width: 718px;}
#page_1 #id1_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 718px;overflow: hidden;}
#page_1 #id1_2 {border:none;margin: 188px 0px 0px 185px;padding: 0px;border:none;width: 533px;overflow: hidden;}

#page_1 #p1dimg1 {position:absolute;top:251px;left:216px;z-index:-1;width:411px;height:606px;}
#page_1 #p1dimg1 #p1img1 {width:411px;height:606px;}

#page_1 #p1inl_img1 {position:relative;width:2px;height:10px;}
#page_1 #p1inl_img2 {position:relative;width:4px;height:28px;}
#page_1 #p1inl_img3 {position:relative;width:3px;height:15px;}
#page_1 #p1inl_img4 {position:relative;width:4px;height:30px;}
#page_1 #p1inl_img5 {position:relative;width:3px;height:15px;}
#page_1 #p1inl_img6 {position:relative;width:5px;height:30px;}



#page_2 {position:relative; overflow: hidden;margin: 38px 0px 12px 68px;padding: 0px;border: none;width: 726px;}
#page_2 #id2_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 726px;overflow: hidden;}
#page_2 #id2_2 {border:none;margin: 26px 0px 0px 193px;padding: 0px;border:none;width: 533px;overflow: hidden;}

#page_2 #p2dimg1 {position:absolute;top:772px;left:687px;z-index:-1;width:1px;height:1px;font-size: 1px;line-height:nHeight;}
#page_2 #p2dimg1 #p2img1 {width:1px;height:1px;}




.ft0{font: bold 21px 'Times New Roman';line-height: 24px;}
.ft1{font: bold 16px 'Times New Roman';line-height: 19px;}
.ft2{font: 16px 'Times New Roman';line-height: 19px;}
.ft3{font: bold 16px 'Times New Roman';line-height: 26px;}
.ft4{font: italic 16px 'Times New Roman';line-height: 26px;}
.ft5{font: 16px 'Times New Roman';line-height: 26px;}
.ft6{font: italic 16px 'Arial';line-height: 28px;}
.ft7{font: italic 16px 'Times New Roman';line-height: 28px;}
.ft8{font: 11px 'Times New Roman';line-height: 23px;position: relative; bottom: 6px;}
.ft9{font: 16px 'Times New Roman';line-height: 28px;}
.ft10{font: italic 16px 'Times New Roman';line-height: 19px;}
.ft11{font: 1px 'Times New Roman';line-height: 1px;}
.ft12{font: italic 15px 'Times New Roman';line-height: 17px;}
.ft13{font: 1px 'Times New Roman';line-height: 6px;}
.ft14{font: 1px 'Times New Roman';line-height: 13px;}
.ft15{font: 12px 'Arial';line-height: 15px;}
.ft16{font: 16px 'Times New Roman';line-height: 16px;}
.ft17{font: 21px 'Times New Roman';line-height: 23px;position: relative; bottom: -4px;}
.ft18{font: 1px 'Times New Roman';line-height: 10px;}
.ft19{font: 1px 'Times New Roman';line-height: 9px;}
.ft20{font: 13px 'Arial';line-height: 16px;}
.ft21{font: 13px 'Times New Roman';line-height: 15px;}
.ft22{font: 1px 'Times New Roman';line-height: 11px;}
.ft23{font: 12px 'Times New Roman';line-height: 15px;}
.ft24{font: 1px 'Times New Roman';line-height: 15px;}
.ft25{font: 16px 'Arial';line-height: 27px;}
.ft26{font: 1px 'Times New Roman';line-height: 3px;}
.ft27{font: italic 12px 'Times New Roman';line-height: 15px;position: relative; bottom: -3px;}
.ft28{font: italic 16px 'Arial';line-height: 19px;}
.ft29{font: 12px 'Times New Roman';line-height: 15px;position: relative; bottom: 7px;}
.ft30{font: italic 16px 'Times New Roman';line-height: 30px;}
.ft31{font: italic 11px 'Times New Roman';line-height: 27px;}
.ft32{font: italic 16px 'Arial';line-height: 30px;}
.ft33{font: 16px 'Times New Roman';line-height: 30px;}
.ft34{font: 8px 'Calibri';line-height: 10px;}
.ft35{font: bold 16px 'Times New Roman';line-height: 24px;}
.ft36{font: 16px 'Times New Roman';line-height: 24px;}
.ft37{font: 16px 'Times New Roman';margin-left: 12px;line-height: 24px;}
.ft38{font: 16px 'Times New Roman';margin-left: 12px;line-height: 19px;}
.ft39{font: 16px 'Times New Roman';margin-left: 12px;line-height: 25px;}
.ft40{font: 16px 'Times New Roman';line-height: 25px;}
.ft41{font: 1px 'Times New Roman';line-height: 16px;}
.ft42{font: 15px 'Times New Roman';line-height: 16px;}
.ft43{font: 14px 'Times New Roman';line-height: 16px;}
.ft44{font: 16px 'Times New Roman';margin-left: 12px;line-height: 26px;}
.ft45{font: 9px 'Times New Roman';line-height: 19px;}
.ft46{font: 15px 'Times New Roman';line-height: 24px;}
.ft47{font: 9px 'Times New Roman';line-height: 12px;}
.ft48{font: 15px 'Times New Roman';line-height: 15px;}
.ft49{font: 16px 'Times New Roman';margin-left: 16px;line-height: 19px;}

.p0{text-align: left;padding-left: 77px;margin-top: 0px;margin-bottom: 0px;}
.p1{text-align: left;padding-left: 37px;margin-top: 21px;margin-bottom: 0px;}
.p2{text-align: left;padding-left: 37px;margin-top: 27px;margin-bottom: 0px;}
.p3{text-align: left;margin-top: 9px;margin-bottom: 0px;}
.p4{text-align: justify;padding-right: 46px;margin-top: 27px;margin-bottom: 0px;text-indent: 38px;}
.p5{text-align: justify;padding-right: 45px;margin-top: 6px;margin-bottom: 0px;}
.p6{text-align: left;padding-left: 37px;margin-top: 6px;margin-bottom: 0px;}
.p7{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p8{text-align: left;padding-left: 191px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p9{text-align: center;padding-right: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p10{text-align: center;padding-left: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p11{text-align: right;padding-right: 29px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p12{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p13{text-align: left;padding-left: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p14{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p15{text-align: left;padding-left: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p16{text-align: right;padding-right: 287px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p17{text-align: center;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p18{text-align: left;padding-left: 219px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p19{text-align: justify;padding-right: 45px;margin-top: 9px;margin-bottom: 0px;}
.p20{text-align: right;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p21{text-align: right;padding-right: 178px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p22{text-align: right;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p23{text-align: right;padding-right: 192px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p24{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p25{text-align: justify;padding-right: 45px;margin-top: 0px;margin-bottom: 0px;}
.p26{text-align: left;margin-top: 0px;margin-bottom: 0px;}
.p27{text-align: left;padding-left: 341px;margin-top: 0px;margin-bottom: 0px;}
.p28{text-align: left;padding-left: 8px;padding-right: 45px;margin-top: 32px;margin-bottom: 0px;text-indent: 38px;}
.p29{text-align: left;padding-left: 8px;padding-right: 46px;margin-top: 7px;margin-bottom: 0px;text-indent: 38px;}
.p30{text-align: left;padding-left: 45px;margin-top: 35px;margin-bottom: 0px;}
.p31{text-align: left;padding-left: 32px;padding-right: 46px;margin-top: 9px;margin-bottom: 0px;text-indent: -24px;}
.p32{text-align: left;padding-left: 8px;margin-top: 7px;margin-bottom: 0px;}
.p33{text-align: left;padding-left: 32px;padding-right: 46px;margin-top: 8px;margin-bottom: 0px;text-indent: -24px;}
.p34{text-align: left;padding-left: 32px;padding-right: 46px;margin-top: 5px;margin-bottom: 0px;text-indent: -24px;}
.p35{text-align: left;padding-left: 8px;margin-top: 6px;margin-bottom: 0px;}
.p36{text-align: left;padding-left: 8px;margin-top: 8px;margin-bottom: 0px;}
.p37{text-align: left;padding-left: 47px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p38{text-align: left;padding-left: 46px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p39{text-align: center;padding-right: 16px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p40{text-align: center;padding-right: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p41{text-align: center;padding-right: 58px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p42{text-align: center;padding-left: 44px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p43{text-align: center;padding-left: 42px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p44{text-align: left;padding-left: 9px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p45{text-align: left;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p46{text-align: center;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p47{text-align: left;padding-left: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p48{text-align: justify;padding-left: 32px;padding-right: 45px;margin-top: 27px;margin-bottom: 0px;text-indent: -24px;}
.p49{text-align: center;padding-right: 27px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p50{text-align: center;padding-right: 26px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p51{text-align: center;padding-left: 33px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p52{text-align: center;padding-left: 31px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p53{text-align: left;padding-left: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p54{text-align: left;padding-left: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p55{text-align: left;padding-left: 36px;margin-top: 18px;margin-bottom: 0px;}
.p56{text-align: left;padding-left: 8px;margin-top: 9px;margin-bottom: 0px;}

.td0{padding: 0px;margin: 0px;width: 564px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 107px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 216px;vertical-align: bottom;}
.td3{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td4{padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td5{padding: 0px;margin: 0px;width: 25px;vertical-align: bottom;}
.td6{padding: 0px;margin: 0px;width: 295px;vertical-align: bottom;}
.td7{padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td8{padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td9{padding: 0px;margin: 0px;width: 671px;vertical-align: bottom;}
.td10{padding: 0px;margin: 0px;width: 230px;vertical-align: bottom;}
.td11{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td12{padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
.td13{padding: 0px;margin: 0px;width: 190px;vertical-align: bottom;}
.td14{padding: 0px;margin: 0px;width: 210px;vertical-align: bottom;}
.td15{padding: 0px;margin: 0px;width: 201px;vertical-align: bottom;}
.td16{padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
.td17{padding: 0px;margin: 0px;width: 72px;vertical-align: bottom;}
.td18{padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td19{padding: 0px;margin: 0px;width: 344px;vertical-align: bottom;}
.td20{border-left: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
.td21{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;}
.td22{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
.td23{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 171px;vertical-align: bottom;}
.td24{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 58px;vertical-align: bottom;}
.td25{padding: 0px;margin: 0px;width: 70px;vertical-align: bottom;}
.td26{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;}
.td27{padding: 0px;margin: 0px;width: 58px;vertical-align: bottom;}
.td28{padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td29{padding: 0px;margin: 0px;width: 71px;vertical-align: bottom;}
.td30{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 114px;vertical-align: bottom;}
.td31{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
.td32{padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
.td33{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 171px;vertical-align: bottom;}
.td34{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 58px;vertical-align: bottom;}
.td35{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td36{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td37{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;}
.td38{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 58px;vertical-align: bottom;}
.td39{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td40{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td41{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 56px;vertical-align: bottom;}
.td42{padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td43{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td44{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td45{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 56px;vertical-align: bottom;}
.td46{border-left: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 139px;vertical-align: bottom;}
.td47{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 32px;vertical-align: bottom;}
.td48{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 139px;vertical-align: bottom;}
.td49{padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
.td50{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 32px;vertical-align: bottom;}
.td51{padding: 0px;margin: 0px;width: 82px;vertical-align: bottom;}
.td52{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 139px;vertical-align: bottom;}
.td53{padding: 0px;margin: 0px;width: 139px;vertical-align: bottom;}
.td54{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 24px;vertical-align: bottom;}
.td55{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 32px;vertical-align: bottom;}
.td56{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 25px;vertical-align: bottom;}
.td57{padding: 0px;margin: 0px;width: 24px;vertical-align: bottom;}

.tr0{height: 21px;}
.tr1{height: 37px;}
.tr2{height: 30px;}
.tr3{height: 31px;}
.tr4{height: 19px;}
.tr5{height: 6px;}
.tr6{height: 13px;}
.tr7{height: 27px;}
.tr8{height: 10px;}
.tr9{height: 9px;}
.tr10{height: 11px;}
.tr11{height: 26px;}
.tr12{height: 15px;}
.tr13{height: 24px;}
.tr14{height: 20px;}
.tr15{height: 3px;}
.tr16{height: 55px;}
.tr17{height: 29px;}
.tr18{height: 16px;}
.tr19{height: 28px;}

.t0{width: 671px;margin-top: 6px;font: italic 16px 'Times New Roman';}
.t1{width: 451px;margin-left: 191px;margin-top: 16px;font: italic 16px 'Times New Roman';}
.t2{width: 452px;margin-left: 190px;margin-top: 6px;font: 16px 'Times New Roman';}
.t3{width: 688px;margin-top: 7px;font: 16px 'Times New Roman';}
.t4{width: 688px;margin-top: 3px;font: 15px 'Times New Roman';}

</style>
</head>

<body>
<div id="page_1">
<div id="id1_1">
<p class="p0 ft0">LAIDININKO SAVITOSIOS VARŽOS NUSTATYMAS</p>
<p class="p1 ft2"><span class="ft1">Darbo užduotis</span>. Nustatyti laidininko savitąja varžą remiantis Omo dėsniu.</p>
<p class="p2 ft2"><span class="ft1">Teorinio pasirengimo klausimai</span>. Klasikinės elektroninės metalų elektrinio laidumo teorijos</p>
<p class="p3 ft2">pagrindai. Laidininko ominė varža. Savitoji varža.</p>
<p class="p4 ft5"><span class="ft3">Teorinė dalis</span>. Metalai yra geri elektros ir šilumos laidininkai. Tai rodo, kad elektros krūvį ir šilumą perneša tie patys nešikliai – <span class="ft4">laisvieji elektronai</span>. Pagal klasikinę elektroninę metalų laidumo teoriją, metalo <span class="ft4">atomų valentiniai elektronai </span>kristale nesurišti su konkrečiu atomu, todėl laisvai juda po</p>
<p class="p5 ft9">visą metalo tūrį. Šio chaotiško judėjimo vidutinis greitis &lt; <span class="ft6">v </span>&gt; <span class="ft7">~ </span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAF0lEQVQImQXBAQEAAACCIPo/2mAVGIIDNPgD/3SjITwAAAAASUVORK5CYII=" id="p1inl_img1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAUCAYAAABF5ffbAAAAOElEQVQYla2OuQ0AIAzEYvbf2VRIkBQIkSut+1Aja2QAWGBxAqrcnR9wjXR17n2dP3cREcfIW3wC6cIUI7O78aoAAAAASUVORK5CYII=" id="p1inl_img2"><span class="ft7"> T </span>ir kambario temperatūroje didesnis už 100 km/s. Sudarius elektrinį lauką, jo veikiami elektronai ima dreifuoti kryptingai – teka elektros srovė. Šio elektronų judėjimo vidutinis greitis tik apie <nobr>10<span class="ft8">-4</span></nobr><span class="ft8"> </span>m/s.</p>
<p class="p6 ft10"><span class="ft2">Metalams gerai tinka Omo dėsnis: </span>vienalytei grandinės daliai srovės stipris I tiesiog proporcingas</p>
<table cellpadding="0" cellspacing="0" class="t0">
<tbody><tr>
	<td colspan="6" class="tr0 td0"><p class="p7 ft10">tos dalies įtampai U ir atvirkščiai proporcingas tos dalies ominei varžai R<span class="ft2">, t.y.</span></p></td>
	<td class="tr0 td1"><p class="p7 ft11">&nbsp;</p></td>
</tr>
<tr>
	<td rowspan="2" class="tr1 td2"><p class="p8 ft10">I <span class="ft2">=</span></p></td>
	<td class="tr2 td3"><p class="p9 ft12">U</p></td>
	<td colspan="2" rowspan="2" class="tr1 td4"><p class="p10 ft2">.</p></td>
	<td class="tr3 td5"><p class="p7 ft11">&nbsp;</p></td>
	<td class="tr3 td6"><p class="p7 ft11">&nbsp;</p></td>
	<td rowspan="2" class="tr1 td1"><p class="p11 ft2">(1)</p></td>
</tr>
<tr>
	<td rowspan="2" class="tr4 td4"><p class="p12 ft10">R</p></td>
	<td class="tr5 td5"><p class="p7 ft13">&nbsp;</p></td>
	<td class="tr5 td6"><p class="p7 ft13">&nbsp;</p></td>
</tr>
<tr>
	<td class="tr6 td2"><p class="p7 ft14">&nbsp;</p></td>
	<td class="tr6 td7"><p class="p7 ft14">&nbsp;</p></td>
	<td class="tr6 td8"><p class="p7 ft14">&nbsp;</p></td>
	<td class="tr6 td5"><p class="p7 ft14">&nbsp;</p></td>
	<td class="tr6 td6"><p class="p7 ft14">&nbsp;</p></td>
	<td class="tr6 td1"><p class="p7 ft14">&nbsp;</p></td>
</tr>
<tr>
	<td colspan="7" class="tr7 td9"><p class="p13 ft2">Laidininko varža priklauso nuo jo matmenų, temperatūros, medžiagos rūšies bei jos būsenos ir lygi</p></td>
</tr>
<tr>
	<td class="tr7 td2"><p class="p7 ft11">&nbsp;</p></td>
	<td class="tr7 td4"><p class="p14 ft15"></p></td>
	<td class="tr7 td7"><p class="p7 ft11">&nbsp;</p></td>
	<td class="tr7 td8"><p class="p12 ft16">ρ</p></td>
	<td class="tr7 td5"><p class="p7 ft11">&nbsp;</p></td>
	<td class="tr7 td6"><p class="p7 ft11">&nbsp;</p></td>
	<td class="tr7 td1"><p class="p7 ft11">&nbsp;</p></td>
</tr>
<tr>
	<td colspan="2" rowspan="2" class="tr0 td10"><p class="p8 ft10">R <span class="ft2">= </span><span class="ft17">∫</span></p></td>
	<td class="tr8 td7"><p class="p7 ft18">&nbsp;</p></td>
	<td class="tr9 td11"><p class="p7 ft19">&nbsp;</p></td>
	<td rowspan="2" class="tr0 td5"><p class="p15 ft21">d <span class="ft20"></span></p></td>
	<td rowspan="2" class="tr0 td6"><p class="p16 ft2">;</p></td>
	<td rowspan="2" class="tr0 td1"><p class="p11 ft2">(2)</p></td>
</tr>
<tr>
	<td class="tr10 td7"><p class="p7 ft22">&nbsp;</p></td>
	<td rowspan="2" class="tr11 td8"><p class="p17 ft10">S</p></td>
</tr>
<tr>
	<td colspan="2" class="tr12 td10"><p class="p18 ft23">0</p></td>
	<td class="tr12 td7"><p class="p7 ft24">&nbsp;</p></td>
	<td class="tr12 td5"><p class="p7 ft24">&nbsp;</p></td>
	<td class="tr12 td6"><p class="p7 ft24">&nbsp;</p></td>
	<td class="tr12 td1"><p class="p7 ft24">&nbsp;</p></td>
</tr>
</tbody></table>
<p class="p19 ft9">čia ρ – savitoji varža, priklausanti nuo medžiagos rūšies bei jos būsenos ir temperatūros. Iš čia vienalyčio vienodos temperatūros ir vienodo skerspjūvio ploto <span class="ft7">S </span>ilgio <span class="ft25"> </span>laidininko ominė varža</p>
<table cellpadding="0" cellspacing="0" class="t1">
<tbody><tr>
	<td rowspan="2" class="tr13 td12"><p class="p7 ft2"><span class="ft10">R </span>= ρ</p></td>
	<td class="tr14 td11"><p class="p20 ft15"></p></td>
	<td rowspan="2" class="tr13 td13"><p class="p21 ft2">.</p></td>
	<td rowspan="2" class="tr13 td14"><p class="p22 ft2">(3)</p></td>
</tr>
<tr>
	<td class="tr15 td8"><p class="p7 ft26">&nbsp;</p></td>
</tr>
<tr>
	<td class="tr4 td12"><p class="p7 ft11">&nbsp;</p></td>
	<td colspan="2" class="tr4 td15"><p class="p23 ft10">S</p></td>
	<td class="tr4 td14"><p class="p7 ft11">&nbsp;</p></td>
</tr>
</tbody></table>
<p class="p6 ft2">Pagal klasikinę metalų elektroninio laidumo teoriją savitoji varža</p>
<table cellpadding="0" cellspacing="0" class="t2">
<tbody><tr>
	<td rowspan="2" class="tr16 td16"><p class="p7 ft2">ρ =</p></td>
	<td class="tr11 td17"><p class="p7 ft2">2 <span class="ft10">m</span><span class="ft27">e </span>&lt; <span class="ft28">v </span>&gt;</p></td>
	<td rowspan="2" class="tr16 td18"><p class="p22 ft2">;</p></td>
	<td rowspan="2" class="tr16 td19"><p class="p22 ft2">(4)</p></td>
</tr>
<tr>
	<td class="tr17 td17"><p class="p24 ft2"><span class="ft10">e</span><span class="ft29">2 </span><span class="ft10">n </span>&lt; λ &gt;</p></td>
</tr>
</tbody></table>
<p class="p25 ft33">čia <span class="ft30">m</span><span class="ft31">e </span>– elektrono masė, <span class="ft30">e </span>– jo krūvis, <span class="ft30">n </span>– valentinių (laisvųjų) elektronų koncentracija, &lt; λ &gt; – vidutinis elektrono laisvojo kelio ilgis. Nė vienas šių dydžių nepriklauso nuo elektrinio lauko stiprio, o tuo pačiu nuo įtampos. Pagal šią teoriją tik dydis &lt; <span class="ft32">v </span>&gt; priklauso nuo temperatūros ir yra proporcingas <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAF0lEQVQImQXBAQEAAACCIPo/2mAVGIIDNPgD/3SjITwAAAAASUVORK5CYII=" id="p1inl_img3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAUCAYAAABF5ffbAAAAOElEQVQYla2OuQ0AIAzEYvbf2VRIkBQIkSut+1Aja2QAWGBxAqrcnR9wjXR17n2dP3cREcfIW3wC6cIUI7O78aoAAAAASUVORK5CYII=" id="p1inl_img4"><span class="ft30"> T </span>. Taigi pagal ją dydis ρ, o tuo pačiu ir varža <span class="ft30">R</span>, turėtų kisti proporcingai <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAF0lEQVQImQXBAQEAAACCIPo/2mAVGIIDNPgD/3SjITwAAAAASUVORK5CYII=" id="p1inl_img5"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAUCAYAAABF5ffbAAAAOElEQVQYla2OuQ0AIAzEYvbf2VRIkBQIkSut+1Aja2QAWGBxAqrcnR9wjXR17n2dP3cREcfIW3wC6cIUI7O78aoAAAAASUVORK5CYII=" id="p1inl_img6"><span class="ft30"> T </span>.</p>

<!-- <div id="page_2">

<div id="id2_1"> -->

<p class="p28 ft36"><span class="ft35">Darbo aprašymas. </span>Laboratorinio darbo maketą sudaro maitinimo šaltinis 1, multimetras, 2, skirtingų medžiagų bandiniai 3. Bendras darbo vaizdas pateiktas 1 pav.</p>
<p class="p29 ft36">Medžiagų bandiniai yra: skirtingo skersmens varinė viela; skirtingo ilgio plieninė viela. Matavimus su jais rekomenduojama atlikti poromis, t.y. varis ir plienas.</p>
<p class="p30 ft1">Darbo eiga.</p>
<p class="p31 ft36"><span class="ft2">1.</span><span class="ft37">Maitinimo šaltinio srovės rankenėles nustatome į mažiausios srovės padėtį (iki galo prieš laikrodžio rodyklę). Įtampos rankenėles į didžiausios įtampos padėtį (iki galo pagal laikrodžio rodyklę).</span></p>
<p class="p32 ft2"><span class="ft2">2.</span><span class="ft38">Laboratoriniais krokodilais prie matavimo sistemos prijungiame pirmąjį pasirinktą bandinį.</span></p>
<p class="p33 ft40"><span class="ft2">3.</span><span class="ft39">Įjungiame maitinimo šaltinį ir multimetrą. Multimetrą nustatome į įtampos (mV) matavimo režimą. Srovė atskaitoma šaltinio indikatoriuje; įtampa multimetre.</span></p>
<p class="p34 ft40"><span class="ft2">4.</span><span class="ft39">Nustatome pasirinktas (arba dėstytojo nurodytas) srovės vertes ir atitinkamas įtampos vertes įrašome į 1 lentelę. Pasižymime bandinio parametrus</span></p>
<p class="p35 ft2"><span class="ft2">5.</span><span class="ft38">Matavimus pakartojame su likusiais bandiniais</span></p>

<p class="p48 ft46"><span class="ft2">6.</span><span class="ft44">Apskaičiuojame eksperimentines bandinių savitąsias varžas </span>&lt;ρ<span class="ft45">eks</span>&gt; <span class="ft5">(3 formulė) naudojant vidutinę bandinio varžos vertę . Palyginame su teorinėmis bandinių savitosiomis varžomis, apskaičiuojame santykinę paklaidą </span>δ<span class="ft5">.</span></p>

<!-- <p class="p55 ft1">Kontroliniai klausimai</p>
<p class="p56 ft2"><span class="ft2">1.</span><span class="ft49">Kokie svarbiausi klasikinės elektroninės metalų elektrinio laidumo teorijos teiginiai ?</span></p>
<p class="p36 ft2"><span class="ft2">2.</span><span class="ft49">Nuo ko priklauso metalų savitoji elektrinė varža pagal kvantinę teoriją ?</span></p>
<p class="p56 ft2"><span class="ft2">3.</span><span class="ft49">Kokia bendroji laidininko ominės varžos formulė ?</span></p> -->
</div>
<div id="id2_2">
</div>
</div>


    <div class="col-sm-2"></div>
    </div>
<?php include('./footer.php');?>