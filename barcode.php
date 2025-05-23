<?php
require 'vendor/autoload.php';

use Picqer\Barcode\BarcodeGeneratorSVG;

$code = $_GET['code'] ?? '';

if (empty($code)) {
    http_response_code(400);
    exit('Code requis.');
}

$generator = new BarcodeGeneratorSVG();

// Définir le Content-Type pour SVG
header('Content-Type: image/svg+xml');

// Générer et afficher le code-barres SVG
echo $generator->getBarcode($code, $generator::TYPE_CODE_128, 2, 60);
