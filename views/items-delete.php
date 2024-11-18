<?php
require 'partials/head.php';
require 'partials/header.php';

?>

<div class="row admin">
    <div class="col-md-6">
        <h1><strong>Supprimer un item</strong></h1>
        <br>
        <form class="form" role="form" method="POST">
            <input type="hidden" name="id" value="<?=$sushiselectionné['0']['id']?>">
            <br>
            <div>
                <label class="form-label" for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="<?= $sushiselectionné['0']['name']?>">
            </div>
            <br>
            <div>
                <label class="form-label" for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                    value="<?= $sushiselectionné['0']['description']?>">
            </div>
            <br>
            <div>
                <label class="form-label" for="price">Prix: (en $)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prix"
                    value=<?= $sushiselectionné['0']['price']?>>
            </div>
            <br>
            <div>
                <label class="form-label" for="category">Catégorie:</label>
                <select class="form-control" id="category" name="category">
                    <?php foreach($sushiCategorie as $sushiCategory) {
                         $i = 0;
                         $i++;
                         $selected = $sushiCategory['id'] == $sushiselectionné['0']['idCategory'] ? 'selected' : '';
                    ?>
                    <option value='<?= $i ?>'<?=$selected ?>><?=$sushiCategory['name'] ?></option>
                    
                    <?php } ?>
                </select>
            </div>  
            <br>
            <div>
                <input type="hidden" id="image" name="image" value=maki_saumon.jpg>
                <label class="form-label" for="imagePath">Image:</label>
                <p id="imagePath"><?=$sushiselectionné['0']['image']?></p>
            </div>
            <br>
            <div class="form-actions">
                <button type="submit" class="btn btn-success"><span class="bi-pencil"></span> Modifier</button>
                <a class="btn btn-primary" href="/items"><span class="bi-arrow-left"></span> Retour</a>
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