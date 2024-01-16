<?php


require_once __DIR__ . '/Models/Categorie.php';
require_once __DIR__ . '/Models/Prodotti.php';



$prodotti = [
    new Categorie(
        "Misi",
        "British Shorthair",
        "15kg",
        new Prodotti("lettiera", "cuccia per gatto", "USA")
    ),
    new Categorie(
        "Max",
        "Munchkin",
        "10kg",
        new Prodotti("crocchette", "tiragraffi", "Gran Bretagna")
    ),
    new Categorie(
        "Yeager",
        "german shepard",
        "40kg",
        new Prodotti("crocchette", "cuccia per il cane", "Germania")
    ),
    new Categorie(
        "Ford",
        "Siberian Husky",
        "35kg",
        new Prodotti("crocchette", "giochi per cani", "stati uniti")
    )
];
