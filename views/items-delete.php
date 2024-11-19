<?php
require 'partials/head.php';
require 'partials/header.php';

?>

<div class="row admin">
    <div class="col-md-6">
        <h1><strong>Voir un item</strong></h1>
        <br>
        
           
            <br>
            <div>
                <label class="form-label" for="name">Nom:</label>
                <p name="name"><?= $sushiselectionné['0']['name']?></p>
            </div>
            <br>
            <div>
                <label class="form-label" for="description">Description:</label>
                <p name="description"><?= $sushiselectionné['0']['description']?></p>
            </div>
            <br>
            <div>
                <label class="form-label" for="price">Prix: (en $)</label>
                <p name="price"><?= $sushiselectionné['0']['price']?></p>
            </div>
            <br>
            <div>
                <label class="form-label" for="category">Catégorie:</label>
                <p name="category"><?=$selected ?></p>
            </div>  
            <br>
            <div>
                <label class="form-label" for="imagePath">Image:</label>
                <p id="imagePath"><?=$sushiselectionné['0']['image']?></p>
            </div>
            <br>
            <form method="POST">
            <div class="form-actions">
                <input type="hidden" name="id" value="<?= $sushiselectionné['0']['id']?>">
                <button type="submit" class="btn btn-danger"><span class="bi-pencil"></span>Oui</button>
                <a class="btn btn-secondary" href="/list-items">Non</a>
            </div>
            </form>
       
    </div>
    <div class="col-md-6 site">
        <div class="img-thumbnail">
            <img src=public/uploads/<?= $sushiselectionné['0']['image']?> alt="...">
            <div class="price"><?= $sushiselectionné['0']['price']?></div>
            <div class="caption">
                <h4><?=$sushiselectionné['0']['name'] ?></h4>
                <p><?=$sushiselectionné['0']['description'] ?></p>
                <a href="/panier-achat" class="btn btn-order disabled add-to-cart" role="button"><span class="bi-cart-fill"></span>
                    Ajouter au panier</a>
            </div>
        </div>
    </div>
</div>


<?php require 'partials/footer.php'; ?>