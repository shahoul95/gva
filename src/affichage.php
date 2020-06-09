<?php
// une new requete
 if(isset($_REQUEST['dest'])&& isset($_REQUEST['dests'])){
    $bddse = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', '');
 
    $queryses= $bddse->query("SELECT * FROM `aeroport`" );
    $datases= $queryses->fetchAll(PDO::FETCH_ASSOC);
    $jsonse= json_encode($datases);
    header('Content-Type: application/json');
    echo $jsonse;
 }

 // une new requete
 if(isset($_REQUEST['manuelle']) && isset($_REQUEST['automatique'])&& isset($_REQUEST['departs'])&& isset($_REQUEST['retours'])){
    $bdds = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', '');
    $automatique=$_REQUEST["automatique"];
    $manuelle=$_REQUEST["manuelle"];
    $ordre = 'ASC';
    $departs = $_REQUEST["departs"];
    $retours = $_REQUEST["retours"];

    $query1 = $bdds->query("SELECT DISTINCT `vehicule` FROM `date_reserve` WHERE '$departs'  BETWEEN date_retrait AND date_retour OR '$retours'  BETWEEN date_retrait AND date_retour ");
    $data1= $query1->fetchAll(PDO::FETCH_ASSOC);

    //$query2 = $bdds->query("SELECT * FROM `voiture`WHERE `boite` IN ( '$automatique', '$manuelle' ) ORDER BY `prix` ASC");
    $query2 = $bdds->query("SELECT * FROM `voiture` ORDER BY `prix` ASC");
    $data2= $query2->fetchAll(PDO::FETCH_ASSOC);
    
    $nbret = 0;
    for($j=0; $j<(count($data1)); $j++){// compte nombre d'element sous forme de tableau de la première requete
        for($i=0; $i<(count($data2)); $i++){ // compte nombre d'element sous forme de tableau de la deuxieme requete
            $iddata1 = $data1[$j]['vehicule']; // contient les vehicule reserver a une date depart et de retour
            $iddata2 = $data2[$i]['id']; // contient les id de la table voiture
    
            if($iddata1 == $iddata2){//contient les vehicules reserver a une date qui correspond bien a l'id de la table voiture
                for($l=$i; ($l < count($data2)-1); $l++ ){
                    $data2[$l] = $data2[$l+1];                
            }
            $nbret ++;
            }
        }
    }
    $data = array_slice($data2, 0, (count($data2) - $nbret));
    
    $jsons=json_encode($data);
    header('Content-Type: application/json');
    echo $jsons;   
 }

 // une new requete
 if(isset($_REQUEST['tout'])&& isset($_REQUEST['departs'])&& isset($_REQUEST['retours'])){
    $bdds = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', '');
    $departs=$_REQUEST["departs"];
    $retours=$_REQUEST["retours"];

    $query1 = $bdds->query("SELECT DISTINCT `vehicule` FROM `date_reserve` WHERE '$departs'  BETWEEN date_retrait AND date_retour OR '$retours'  BETWEEN date_retrait AND date_retour ");
    $data1= $query1->fetchAll(PDO::FETCH_ASSOC);    // data1 a 2 element  1 et 5

    $query2 = $bdds->query("SELECT * FROM `voiture` ORDER BY `prix` ASC");
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

    $jsons=json_encode($data);
    header('Content-Type: application/json');
    echo $jsons;
}
 
 // une new requete
if(isset($_REQUEST['suvs']) && isset($_REQUEST['berlines']) && isset($_REQUEST['monospaces']) && isset($_REQUEST['automatiques']) && isset($_REQUEST['manuelles']) && isset($_REQUEST['ordre'])&& isset($_REQUEST['departs'])&& isset($_REQUEST['retours'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', '');
    $suv=$_REQUEST["suvs"];
    $berline=$_REQUEST["berlines"];
    $monospace=$_REQUEST["monospaces"];
    $automatiques=$_REQUEST["automatiques"];
    $manuelles=$_REQUEST["manuelles"];
    $ordre = $_REQUEST["ordre"];
    $departs = $_REQUEST["departs"];
    $retours = $_REQUEST["retours"];

    $query1 = $bdd->query("SELECT DISTINCT `vehicule` FROM `date_reserve` WHERE '$departs'  BETWEEN date_retrait AND date_retour OR '$retours'  BETWEEN date_retrait AND date_retour ");
    $data1= $query1->fetchAll(PDO::FETCH_ASSOC);

    $query2 = $bdd->query("SELECT * FROM `voiture` WHERE `categorie` IN ( '$suv', '$berline','$monospace' ) AND `boite` IN ( '$automatiques', '$manuelles' ) ORDER BY `prix` $ordre");
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

    $json=json_encode($data);
    header('Content-Type: application/json');
    echo $json;
}

?>