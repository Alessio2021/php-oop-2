<?php

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';


try {
    
    $user = new User('Pippo', 'Pluto', 'pippo.pluto@mail.com', new Card(10002000, 859, 'Novembre 2020'));
    // var_dump($user);

    $product = new Product('Tv', 1000, 'Samsung');

    echo $product->getName();
    echo $product->getModel();

    echo $product->getPrice(true, 25);

} catch (Exception $error) {
    echo $error->getMessage();
}