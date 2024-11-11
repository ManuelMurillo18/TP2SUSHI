<nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button id="nav-toggle-button" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMain" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsMain">
                    <ul class="container nav nav-pills">
                        <li class='nav-item'><a class='nav-link active' data-bs-toggle='pill' href='#tab1'>Urumakis</a></li>
                        <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab2'>Makis</a></li>
                        <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab3'>Nigiris</a></li>
                        <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab4'>Sashimis</a></li>
                        <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab5'>Poké bols</a></li>
                    </ul>                        
                </div>
            </div>
            <ul class="container nav navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link nav-menu" data-bs-toggle="modal" data-bs-target="#login-form-modal" title="Connexion">
                        <i class="fa-solid fa-right-to-bracket fa-lg"></i>
                    </a>
                </li>
                <div class="cart-wrapper">
                    <li class="nav-item">
                        <a class="nav-link nav-menu" href="#" title="Panier d'achat">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i> <!-- Icone du panier -->
                            <div class="cart-counter" id="cart-counter">0</div> <!-- Compteur du panier -->
                        </a>
                    </li> 
                </div>
            </ul>
        </nav> 