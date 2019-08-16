<?php
require_once 'TurkeySub.php';
require_once 'VeggieSub.php';

$turkey = new TurkeySub();
$turkey->make();

$veggie = new VeggieSub();
$veggie->make();
