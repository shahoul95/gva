<?php

$bdds = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', '');

$query1 = $bdds->query("SELECT DISTINCT `vehicule` FROM `date_reserve` WHERE '2019-06-15 02:12:14'  BETWEEN date_retrait AND date_retour OR '2019-0-25 12:40:25'  BETWEEN date_retrait AND date_retour ");
$data1= $query1->fetchAll(PDO::FETCH_ASSOC);

$query2 = $bdds->query("SELECT * FROM `voiture`");
$data2= $query2->fetchAll(PDO::FETCH_ASSOC);

$nbret = 0;

for($j=0; $j<(count($data1)); $j++){
    for($i=0; $i<(count($data2)); $i++){
        $iddata1 = $data1[$j]['vehicule']; // 5
            $iddata2 = $data2[$i]['id']; // 5
        
  
        if($iddata1 == $iddata2){
           for($l=$i; ($l < count($data2)-1); $l++ ){ 
                $data2[$l] = $data2[$l+1];

           }
           $nbret ++;
          
        }
    }
}

$data = array_slice($data2, 0, (count($data2) - $nbret));

 
 $jsons=json_encode($i);

 header('Content-Type: application/json');
echo $jsons;

?>