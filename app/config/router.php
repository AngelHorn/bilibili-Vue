<?php

$router = $di->getRouter();

// Define your routes here
//$router->addGet(
//    "/products/edit/{id}",
//    "Products::edit"
//);

$router->add('/videos/{id}',"get");
$router->handle("/videos/get/{id}");


$router->handle();
