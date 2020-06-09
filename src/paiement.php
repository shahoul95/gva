
<?php 
//echo "oouuuu";
if(isset($_REQUEST["numeros"]) && isset($_REQUEST['moise']) && isset($_REQUEST['annees']) && isset($_REQUEST['cryptos']) && isset($_REQUEST['argents'])&& isset($_REQUEST['civilite'])&& isset($_REQUEST['prenom'])&& isset($_REQUEST['nom'])&& isset($_REQUEST['naissance'])&& isset($_REQUEST['mail'])&& isset($_REQUEST['telephone'])&& isset($_REQUEST['adresse'])&& isset($_REQUEST['postale'])&& isset($_REQUEST['ville'])&& isset($_REQUEST['depart'])&& isset($_REQUEST['retour'])&& isset($_REQUEST['id'])&& isset($_REQUEST['lieu_depart'])&& isset($_REQUEST['lieu_retour'])){
	$num = $_REQUEST["numeros"];

  $bdd = new PDO('mysql:host=localhost;dbname=serveur_paiement;charset=utf8', 'root', '');
 
 $req = $bdd->query( "SELECT `id`,`numero_carte`,`mois_expire`,`annee_expire`,`cryptogramme` , `argent_dispo` FROM `banque`  WHERE numero_carte= $num"); 
  $datases= $req->fetch(PDO::FETCH_ASSOC);
  //$json= json_encode($datases);
  //header('Content-Type: application/json');
  $ou = $datases['numero_carte'];
  $out = $datases['annee_expire'];
  $outs = $datases['mois_expire'];
  $pro  = $datases['argent_dispo'];
  $ids=   $datases['id'];
  //request information carte bancaire
  $ok= $_REQUEST['numeros'];
  $oks= $_REQUEST['moise'];
  $okse= $_REQUEST['annees'];
  $okses= $_REQUEST['cryptos'];
  $oksese= $_REQUEST['argents'];
  //request information de la personne
  $civilite= $_REQUEST['civilite'];

  $prenom= $_REQUEST['prenom'];
  $pts= "$civilite $prenom";
  $nom= $_REQUEST['nom'];
  $naissance= $_REQUEST['naissance'];
  $mail= $_REQUEST['mail'];
  $telephone= $_REQUEST['telephone'];
  $adresse= $_REQUEST['adresse'];
  $postale= $_REQUEST['postale'];
  $ville= $_REQUEST['ville'];
  $adresses= "$adresse $postale $ville";
  $depart= $_REQUEST['depart'];
  $retour= $_REQUEST['retour'];
  $id= $_REQUEST['id'];
  $lieu_depart= $_REQUEST['lieu_depart'];
  $lieu_retour= $_REQUEST['lieu_retour'];

$retirer= $pro - $oksese;


  $verifier= password_verify($okses, $datases['cryptogramme'] );

  if ($ok == $ou && $okse == $out && $oks == $outs && $oksese < $pro &&  $verifier ) {
    $bdd = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', '');  
    $bdds = new PDO('mysql:host=localhost;dbname=serveur_paiement;charset=utf8', 'root', '');  
  
    $bdd->query("INSERT INTO `date_reserve` (`id`, `date_retrait`, `date_retour`, `vehicule`, `prenom`, `nom`, `date_naissance`, `telephone`, `adresse`, `mail`, `lieu_retrait`, `lieu_retour`, `prix`) VALUES (NULL, '$depart', '$retour', '$id', '$pts', '$nom', '$naissance', '$telephone', '$adresses', '$mail', '$lieu_depart', '$lieu_retour', '$oksese')");
    $bdds->query("UPDATE banque SET argent_dispo = '$retirer'WHERE id = $ids");
    
      echo 1;  
    } else {
      echo 0;
    
    }
  
 }

?>









 

















