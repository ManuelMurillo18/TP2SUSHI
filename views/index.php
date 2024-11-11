<?php
    require 'partials/head.php';
    require 'partials/header.php';
    require 'partials/nav.php';
?>


<main>
            <div class="tab-content">
                <div class='tab-pane active' id='tab1' role='tabpanel'>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/uramaki_thon.jpg" class="img-fluid" alt="...">
                                <div class="price">8.90 $</div>
                                <div class="caption">
                                    <h4>Urumaki au thon</h4>
                                    <p>Thon et crème sure entourés d'une feuille d'algue et de riz vinaigré ainsi que de graines de sésame grillées.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/urumaki_thon_goberge.jpg" class="img-fluid" alt="...">
                                <div class="price">6.50 $</div>
                                <div class="caption">
                                    <h4>Urumaki de thon et goberge</h4>
                                    <p>Thon et goberge ainsi que bâtonnets de concombre entouré d'une feuille d'algue et riz.  Pour terminer des graines de sésame grillées.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(2)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/urumaki_saumon.jpg" class="img-fluid" alt="...">
                                <div class="price">10.00 $</div>
                                <div class="caption">
                                    <h4>Urumaki de saumon</h4>
                                    <p>Saumon et fromage à la crème entouré d'une feuille d'algue, de riz vinaigré, d'un peu de saumon et une sauce sucrée.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(3)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class='tab-pane ' id='tab2' role='tabpanel'>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/maki_saumon.jpg" class="img-fluid" alt="...">
                                <div class="price">9.00 $</div>
                                <div class="caption">
                                    <h4>Maki de saumon</h4>
                                    <p>Saumon, concombre contenu dans une feuille d'algue.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(4)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/maki_saumon_thon.webp" class="img-fluid" alt="...">
                                <div class="price">10.90 $</div>
                                <div class="caption">
                                    <h4>Maki de saumon et thon</h4>
                                    <p>Saumon, thon, oeuf, tobiko (caviar) et riz contenu dans une feuille d'algue.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(5)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class='tab-pane ' id='tab3' role='tabpanel'>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/nigiri_saumon_1.jpg" class="img-fluid" alt="...">
                                <div class="price">9.70 $</div>
                                <div class="caption">
                                    <h4>Nigiri de saumon</h4>
                                    <p>Saumon crue sur une boule de riz.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(6)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/nigiri_thon.jpg" class="img-fluid" alt="...">
                                <div class="price">11.40 $</div>
                                <div class="caption">
                                    <h4>Nigiri de thon</h4>
                                    <p>Thon crue sur une boule de riz surmonté de caviar.</p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button" onclick="incrementCounter(7)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </main>



<?php require 'partials/footer.php'; ?>