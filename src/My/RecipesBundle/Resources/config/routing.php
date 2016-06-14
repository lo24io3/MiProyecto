<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('my_recipes_homepage', new Route('/', array(
    '_controller' => 'MyRecipesBundle:Default:index',
)));

return $collection;
