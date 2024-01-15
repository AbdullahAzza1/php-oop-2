<?php

// Importo i modelli, cioè le "definizioni" delle classi di oggetto
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Card.php';


//Creo un array in cui ogni elemento è un'istanza di User
$utenti = [
    new User(
        "Andrea",
        "Francioni",
        ["Buy", "Sell"],
        new Address("viale degli ulivi", 123, 20110, "Roma", "Italy")
    ),
    new User(
        "Francesco",
        "Bonanno",
        ["Ship"],
        new Address("corso unione sovietica", 123, 10135, "Napoli", "Italy")
    )
];
