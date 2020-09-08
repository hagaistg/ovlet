<html>
<body>

Berangkat dari <?php echo $_POST["origin"]; ?><br>
Tujuan ke <?php echo $_POST["destination"]; ?>
<br>
<br>

<?php 
$origin = $_POST["origin"];
$destination = $_POST["destination"];

$details = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destination&key=AIzaSyCVU10PsU7Xpkkqpj7VVCAr0VSHYtBvCs8";



$resp_json = file_get_contents($details);
    
    // decode the json response
    $resp = json_decode($resp_json, true);
    $resps = json_decode($resp_json);


    $s = $resps->rows[0]->elements[0]->distance->text;

    
    if($resp['status']=='OK'){
         echo "jarak ", $s;
            echo "\n";
            

            $int = (int)$s;

            $x = 32;
            $c = 34;


            $b = 52;

            $silangit_parapat = 78;
            $silangit_siborong_borong = 16;

            $silangit_balige = 20;
            $silangit_tarutung = 36;


        if($int >=  $silangit_parapat ){
            echo "dengan biaya Rp.38.800";
        }else if($int >=  $silangit_siborong_borong)  {
            echo "dengan biaya Rp.7.750";
        }else if($int >=  $silangit_balige)  {
            echo "dengan biaya Rp.10.150";
        }else if($int >=  $silangit_tarutung )  {
            echo "dengan biaya Rp.17.850";
        }else{
            echo "Tidak terhitung rute";
        }

    
        
    }else{
        return false;
    }



        








