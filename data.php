<?php

// Importo i modelli, cioè le "definizioni" delle classi di oggetto
require_once __DIR__ . '/Models/Categorie.php';
require_once __DIR__ . '/Models/Prodotti.php';


//Creo un array in cui ogni elemento è un'istanza di User
$prodotti = [
    new Categorie(
        "Misi",
        "British Shorthair",
        "15kg",
        new Prodotti("viale degli ulivi", 123, 20110, "Roma", "Italy")
    ),
    new Categorie(
        "Max",
        "Munchkin",
        "10kg",
        new Prodotti("corso unione sovietica", 123, 10135, "Napoli", "Italy")
    )
];
