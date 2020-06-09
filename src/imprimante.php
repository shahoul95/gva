
<?php



require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
require_once __DIR__ . '/vendor/autoload.php';
if(isset($_REQUEST['nom'])&& ($_REQUEST['prenom'])&& ($_REQUEST['naissance'])&& ($_REQUEST['lieu_depart'])&& ($_REQUEST['lieu_retour'])&& ($_REQUEST['date_depart'])&& ($_REQUEST['date_retour'])&& ($_REQUEST['marque'])&& ($_REQUEST['modele'])&& ($_REQUEST['boite'])&& ($_REQUEST['capacite'])&& ($_REQUEST['duree'])&& ($_REQUEST['kilo'])&& ($_REQUEST['argent'])&& ($_REQUEST['prixjour'])&& ($_REQUEST['adresse'])&& ($_REQUEST['postale'])&& ($_REQUEST['ville']) ){

$mpdf = new \Mpdf\Mpdf();
$noms =$_REQUEST['nom'];
$prenoms =$_REQUEST['prenom'];
$naissances =$_REQUEST['naissance'];
$lieu_departs =$_REQUEST['lieu_depart'];
$date_departs = $_REQUEST['date_depart'];
$lieu_retours =$_REQUEST['lieu_retour'];
$date_retours= $_REQUEST['date_retour'];
$marques= $_REQUEST['marque'];
$modeles= $_REQUEST['modele'];
$boites= $_REQUEST['boite'];
$capacites= $_REQUEST['capacite'];
$durees = $_REQUEST['duree'];
$kilos= $_REQUEST['kilo'];
$argents= $_REQUEST['argent'];
$adresse= $_REQUEST['adresse'];
$postale= $_REQUEST['postale'];
$ville= $_REQUEST['ville'];
$mpdf->WriteHTML('<img style="width:50rem; padding-left:40rem; "  src="imageaccueil.png"/>
<h1>FACTURE</h1>
<p>Adresse expiditeur: Locauto cars </p>
<p>Adresse destination:'. $noms.' , '. $adresse.','. $postale.','. $ville.'
 </p>
<h4>Information du conducteur :</h4>
<p> Nom : '. $noms.' </p>
<p>Prenom: '. $prenoms.'</p>
<p>Date de naisssance : '. $naissances.'</p>

<h4>Information du location :</h4>
<p> Lieu de retrait du vehicule :'. $lieu_departs.'</p>
<p> Date et heure de depart : '.$date_departs.'</p><br>
<p> Lieu de retour vehicule :'.$lieu_retours.'</p>
<p> Date et heure de retour : '.$date_retours.'</p>
<h4>Identification du vehicule :</h4>
<p>Marque : '.$marques.'</p>
<p>Modele : '.$modeles.'</p>
<p>Capacite : '.$capacites.' place</p>
<p> Boite : '.$boites.'</p>
<h4>Duree de location :</h4>
<p>'.$durees.' jours</p>
<h4>Kilometre(250 kilometre/jour) :</h4>
<p>Total '.$kilos.' kilometre</p>
<h4 style="padding-left:35rem "> Prix  total : '.$argents.' euros</h4>');
$mpdf->Output('informationsse.pdf','f');
}
/*
$connector = new FilePrintConnector("COM1");
$printer = new Printer($connector);

$printer->setTextSize(3, 3);
$printer -> text("FACTURE\n\n ");
$printer->initialize();
$printer->setEmphasis(true);
$printer -> text("Information du conducteur\n");
$printer->initialize();
$printer -> text("\n");

    $nom =$_REQUEST['nom'];
    $prenom =$_REQUEST['prenom'];
    $naissance =$_REQUEST['naissance'];
    $printer -> text("Nom : $nom\nPrenom: $prenom\nDate de naissance: $naissance\n");
    $printer -> text("\n");
    $printer->setEmphasis(true);
    $lieu_depart =$_REQUEST['lieu_depart'];
    $printer -> text("Lieu de retrait: $lieu_depart \n");
    $printer->initialize();
    $date_depart = $_REQUEST['date_depart'];

    $printer -> text("Date et Heure du retrait : \n $date_depart \n");
    $printer -> text("\n");
    $lieu_retour =$_REQUEST['lieu_retour'];
    $printer -> text("Lieu de retour: $lieu_retour\n");
    $date_retour= $_REQUEST['date_retour'];
    $printer -> text(" Date et Heure de retour :\n $date_retour\n");
    $porte = 5;
    $printer -> text("\n");
    $marque= $_REQUEST['marque'];
    $modele= $_REQUEST['modele'];
    $boite= $_REQUEST['boite'];
    $capacite= $_REQUEST['capacite'];
    $duree = $_REQUEST['duree'];
    $kilo= $_REQUEST['kilo'];
   $argent= $_REQUEST['argent'];
    $printer -> text("Identification du vehicule \n Marque : $marque\n Modele : $modele\n Capacite : $capacite places\n Boite : $boite \n");
    $printer -> text("\n");
    $printer -> text(" Duree location : \n $duree jours \n");
    $printer -> text("\n");
    $prixjour= $_REQUEST['prixjour'];
    $printer -> text("Kilometre(250 kilometre):\n$kilo kilometre total \n Prix par jour : $prixjour euros  \n");
    $printer -> text("\n");
    $printer->setTextSize(1, 1);
    $printer -> text("Prix: $argent euros \n");
    $printer->initialize();

    
 
   
  
    


$printer -> cut();
$printer -> close();
*/
include 'mail.php';


?>