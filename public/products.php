<?php

// Get a $twig object from this file.
    require_once __DIR__ . '/../config/twig.php';
    $products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
    /* Appel du template products.html.twig en lui passant le tableau $products
via l'appel de la méthode render() */
    echo $twig->render('products.html.twig', ['products' => $products]);
    
    // echo $twig->dump($products);