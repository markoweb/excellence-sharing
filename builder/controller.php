<?php

use Builder;

$firstPageBuilder = new Builder\FirstPageBuilder();
$lastPageBuilder = new Builder\LastPageBuilder();

$compositor = new Builder\Compositor();
$compositor->setPageBuilder($firstPageBuilder);
$compositor->compositePage();

$firstPage = $compositor->getPage();
var_dump($firstPage);

$compositor->setPageBuilder($lastPageBuilder);
$compositor->compositePage();

$lastPage = $compositor->getPage();
var_dump($lastPage);
