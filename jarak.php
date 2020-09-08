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

            $parapat_tarutung = 110;
            $parapat_siborong_borong = 89;

            $parapat_balige = 60;
            $balige_tarutung = 52;

            $siborong_borong_tarutung = 35;
            $balige_siborong_borong = 32;

        if($int >=  $parapat_tarutung  && $int > $parapat_siborong_borong){
            echo "dengan biaya Rp.55000";
        }else if($int >=  $parapat_siborong_borong  && $int < $parapat_tarutung)  {
            echo "dengan biaya Rp.44.800";
        }else if($int >=  $parapat_balige  && $int < $parapat_siborong_borong)  {
            echo "dengan biaya Rp.30.100";
        }else if($int >=  $balige_tarutung  && $int < $parapat_balige)  {
            echo "dengan biaya Rp.26.200";
        }else if($int >=  $siborong_borong_tarutung  && $int < $balige_tarutung)  {
            echo "dengan biaya Rp.17.550";
        }else if($int >=  $balige_siborong_borong  && $int < $balige_siborong_borong)  {
            echo "dengan biaya Rp.16.100";
        }else{
            echo "Tidak terhitung rute";
        }

    
        
    }else{
        return false;
    }
?>



        








