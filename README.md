# Projet Site location de voiture 

Mon travail consiste de créer un site web de location de voiture pour permettre au voyageur de faire
une réservation de véhicule. Je dois aussi mettre en oeuvre un système de paiement sécurisé et
confirmation de paiement par l’envoi de mail comportant le ticket de location en PDF ainsi que
l’impression de ticket de location à l’aide d’une imprimante thermique.
Le site de location est composé d‘une page de recherche qui sert aussi de page d’accueil, cette page
permet de rechercher les véhicules disponibles à une date désirée par les clients en saisissant un lieu
de retrait et de lieu de retour ainsi qu’une date de début et de fin de location. En parallèle, le client a
la possibilité de rechercher avec le numéro de billet d’avion.
La recherche des véhicules s’effectue en récupérant la date de début et de fin que le client a saisie
pour récupérer les véhicules disponibles dans la base de données "locauto". Le voyageur à la
possibilité d'effectuer une recherche avec le numéro de billet d'avion. Avec le numéro de billet
d’avion, je récupère la date de départ et retour du vol dans la base de données de «compagnie
aérienne « pour rechercher les véhicules disponible à ses dates dans la base de données de
"locauto".
La réservation du véhicules s'effectue en saisissant l'identité et les informations de numéro carte
bancaire du client et ainsi que une confirmation de paiement accepté si les informations de la carte
bancaire correspond à la saisie. Si la somme d'argent de la location est inférieure à l'argent
disponible dans le compte bancaire du client, donc le paiement est accepté.
Lors de la confirmation du paiement, une impression du ticket de location se fait à l’aide d’une
bibliothèque avec l’imprimante thermique et ainsi qu’un envoie de mail comportant une facture en
PDF se fait aussi à l’aide d’une bibliothèque.
