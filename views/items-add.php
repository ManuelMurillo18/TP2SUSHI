<?php
require 'partials/head.php';
require 'partials/header.php';

?>

<div class="row admin">
    <div class="col-md-6">
        <h1><strong>Ajouter un item</strong></h1>
        <br>
        <form class="form" role="form" method="POST" enctype="multipart/form-data" >
            <br>
            <div>
                <label class="form-label" for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="">
                <?= htmlHelperTag('span', $errors['name'] ?? '', ['class' => 'help-inline']) ?>
            </div>
            <br>
            <div>
                <label class="form-label" for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                    value="">
                <?= htmlHelperTag('span', $errors['description'] ?? '', ['class' => 'help-inline']) ?>
            </div>
            <br>
            <div>
                <label class="form-label" for="price">Prix: (en $)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prix"
                    value="">
                <?= htmlHelperTag('span', $errors['price'] ?? '', ['class' => 'help-inline']) ?>
            </div>
            <br>
            <div>
                <label class="form-label" for="category">Catégorie:</label>
                <select class="form-control" id="category" name="category">
                    <?php foreach($sushiCategorie as $sushiCategory) {
                        
                        
                    ?>
                    <option value=<?=$sushiCategory['id'] ?>><?=$sushiCategory['name'] ?></option>
                    
                    <?php } ?>
                </select>
            </div>  
            <br>
            <div>
                
                <label class="form-label" for="imagePath">Sélectionner une image:</label>
                <input type="file" id="image" name="image">
                <input type="hidden" name="image" value="">
            </div>
            <br>
            <div class="form-actions">
                <button type="submit" class="btn btn-success"><span class="bi-pencil"></span> Ajouter</button>
                <a class="btn btn-primary" href="/list-items"><span class="bi-arrow-left"></span> Retour</a>
            </div>
        </form>
    </div>
    
</div>


<?php require 'partials/footer.php'; ?>