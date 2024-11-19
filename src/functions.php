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

        require "views/404.php";

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
function isGet()
{
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function displayItemsByCategory($categoryId, $sushi)
{
    foreach ($sushi as $sush) {
        if ($sush['idCategory'] == $categoryId) {
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="img-thumbnail">
                    <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                    <div class="price"><?= number_format($sush['price'], 2) ?>$</div>
                    <div class="caption">
                        <h4 class="site"><?= $sush['name'] ?></h4>
                        <p class="site"><?= $sush['description'] ?></p>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?= $sush['id'] ?>">
                            <button type="submit" class="btn btn-order">
                                <span class="bi-cart-fill"></span> Ajouter au panier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}

function moveUploadedPicture(string $destinationPath = 'public/uploads/') 
{      
    if (! empty($_FILES['image']) && $_FILES['image']["error"] === UPLOAD_ERR_OK)
    {         
        move_uploaded_file($_FILES['image']['tmp_name'], $destinationPath . 
        $_FILES['image']['name']);      
    }  
}