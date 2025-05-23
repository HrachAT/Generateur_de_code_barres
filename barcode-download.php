<?php
require 'vendor/autoload.php';

use Picqer\Barcode\BarcodeGeneratorSVG;

$code = $_GET['code'] ?? '';

if (empty($code)) {
    http_response_code(400);
    exit('Code requis.');
}

$generator = new BarcodeGeneratorSVG();
$svg = $generator->getBarcode($code, $generator::TYPE_CODE_128, 2, 60);

header('Content-Type: image/svg+xml');
header('Content-Disposition: attachment; filename="code-barres-' . preg_replace('/[^a-zA-Z0-9]/', '_', $code) . '.svg"');

echo $svg;
