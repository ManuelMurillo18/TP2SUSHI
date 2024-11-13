<?php


function uriPath(): string
{

    $url = $_SERVER['REQUEST_URI'];

    $urlParts = parse_url($url);

    return $urlParts['path'];

}


function routeToController(string $path): void
{

    $validRouteController = false;

    if (array_key_exists($path, ROUTES)) {

        $filePath = 'controllers/' . ROUTES[$path];

        if (file_exists($filePath)) {

            $validRouteController = true;
            require $filePath;

        }

    }

    if (!$validRouteController) {

        require "views/page-not-found.php";

    }

}

function urlActive(string|array $paths, string $class): string
{

    $path = uriPath();

    if (is_array($paths) && in_array($path, $paths)) {
        return $class;
    }

    if ($path === $paths) {
        return $class;
    }

    return "";

}

function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;

}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function displayItemsByCategory($categoryId, $sushi)
{
    foreach ($sushi as $sush) {
        if ($sush['idCategory'] == $categoryId) {
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="img-thumbnail">
                    <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                    <div class="price"><?= $sush['price'] ?></div>
                    <div class="caption">
                        <h4><?= $sush['name'] ?></h4>
                        <p><?= $sush['description'] ?></p>
                        <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)">
                            <span class="bi-cart-fill"></span> Ajouter au panier
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    
}
