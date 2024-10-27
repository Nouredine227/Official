<?php
// Définir le fuseau horaire de Niamey, Niger
date_default_timezone_set('Africa/Niamey');

// Obtenir la date et l'heure actuelles
$dateHeureActuelle = date('Y-m-d H:i:s');

// Retourner la date et l'heure sous forme JSON
echo json_encode(array("dateHeure" => $dateHeureActuelle));
?>
