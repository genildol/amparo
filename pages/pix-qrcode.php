<?php
require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;

header('Content-Type: image/png');

// Aqui você define os dados PIX (exemplo: chave, banco, etc.)
$pixPayload = "00020126360014BR.GOV.BCB.PIX0114chavepix@amparo.org5204000053039865802BR5907Amparo6009Ouricuri62070503***6304";

// Gerar QR Code
$qrCode = QrCode::create($pixPayload)
  ->setEncoding(new Encoding('UTF-8'))
  ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
  ->setSize(250);

$writer = new PngWriter();
$result = $writer->write($qrCode);

// Exibir QR Code
echo $result->getString();
