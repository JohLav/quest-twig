<?php

    // Script that will display the template
    // Twig autoloader included and registered
    
require_once __DIR__ . '/../vendor/autoload.php';

// Loader creation from the file system which looks for the template files in the templates directory in our projet's root

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

//On ajoute la globale $contactEmail à l'initialisation de l'objet Twig
    $contactEmail = 'email@email.com';
    $twig->addGlobal('contactEmail', $contactEmail);