<?php
    require 'partials/head.php';
    require 'partials/header.php';
    require 'partials/nav.php';
    
?>


<main>
            <div class="tab-content">
                <div class='tab-pane active' id='tab1' role='tabpanel'>
                    <div class="row">
                        <?php
                        $count = 0;
                        foreach($sushi as $sush)
                        {
                                
                            if(++$count == 4)
                                break;
                            if($sush['idCategorie'] == 1)
                            {
                              
                        ?>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?=$sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['prix']?></div>
                                <div class="caption">
                                    <h4><?= $sush['name']?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div> 
                </div>
                <div class='tab-pane ' id='tab2' role='tabpanel'>
                    <div class="row">
                    <?php
                        $count = 0;
                        foreach($sushi as $sush)
                        {
                            
                            if(++$count == 4)
                                break;
                            
                            if($sush['idCategorie'] == 2)
                                {
                        ?>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?=$sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['prix']?></div>
                                <div class="caption">
                                    <h4><?= $sush['name']?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div> 
                </div>
                <div class='tab-pane ' id='tab3' role='tabpanel'>
                    <div class="row">
                    <?php
                        $count = 0;
                        foreach($sushi as $sush)
                        {
                            
                            if(++$count == 4)
                                break;
                            
                            if($sush['idCategorie'] == 3)
                                {
                        ?>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?=$sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['prix']?></div>
                                <div class="caption">
                                    <h4><?= $sush['name']?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div> 
                <div class='tab-pane ' id='tab4' role='tabpanel'>
                    <div class="row">
                    <?php
                        $count = 0;
                        foreach($sushi as $sush)
                        {
                           
                            if(++$count == 4)
                                break;

                             if($sush['idCategorie'] == 4)
                                {
                            
                        ?>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?=$sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['prix']?></div>
                                <div class="caption">
                                    <h4><?= $sush['name']?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div> 
                <div class='tab-pane ' id='tab5' role='tabpanel'>
                    <div class="row">
                    <?php
                        $count = 0;
                        foreach($sushi as $sush)
                        { 
                            if(++$count == 4)
                                break;
                            if($sush['idCategorie'] == 5)
                                {
                        ?>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?=$sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['prix']?></div>
                                <div class="caption">
                                    <h4><?= $sush['name']?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div> 
            </div>        
    </main>



<?php require 'partials/footer.php'; ?>