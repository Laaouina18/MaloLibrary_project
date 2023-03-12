<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerImage extends Controller
{
    public function createImage()
    {
        $path = storage_path('app/public/images/'); // Chemin vers le dossier de stockage
        $filename = 'example.jpg'; // Nom du fichier image
        
        $image = imagecreate(200, 200); // Créer une nouvelle image avec une taille de 200x200 pixels
        $color = imagecolorallocate($image, 255, 255, 255); // Définir la couleur de fond en blanc
        imagejpeg($image, $path . $filename); // Enregistrer l'image en tant que fichier JPEG
        
        return 'Image créée avec succès : ' . $filename;
    }
}
