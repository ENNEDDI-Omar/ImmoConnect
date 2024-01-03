<?php

namespace App\models;
require '../../vendor/autoload.php';
use App\dao\AnnonceDAO;

class AnnonceModel
{
    private $id;
    private $image;
    private $prix;
    private $titre;
    private $description;
    private $dateAjout;
    private $bienId;

    public function __construct($id, $image, $prix, $titre, $description, $dateAjout, $bienId)
    {
        $this->id = $id;
        $this->image = $image;
        $this->prix = $prix;
        $this->titre = $titre;
        $this->description = $description;
        $this->dateAjout = $dateAjout;
        $this->bienId = $bienId;
    }

    public static function getAnnonceById($id)
    {
        return AnnonceDAO::getAnnonceById($id);
    }

    public static function getAllAnnonce()
    {
        return AnnonceDAO::getAllAnnonce();
    }

    public function AddAnnonce($image, $prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::addAnnonce();
    }

    public function DeletAnnonce()
    {
        return AnnonceDAO::deletAnnonce();
    }
     
    public function UpdateAnnonce($image, $prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::UpdateAnnonce();
    }


}
