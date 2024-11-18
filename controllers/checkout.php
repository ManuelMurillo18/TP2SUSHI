<?php
require 'src/session.php';

sessionStart();
unset($_SESSION['cart']);

require 'views/checkout.php';