<?php
require __DIR__ . '/../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;

header('Content-Type: image/png');

// Payload PIX (exemplo: chave aleatória, email ou telefone)
$pixPayload = "00020126360014BR.GOV.BCB.PIX0114chavepix@amparo.org5204000053039865802BR5907Amparo6009Ouricuri62070503***6304";

// Criar QR Code
$qrCode = QrCode::create($pixPayload)
  ->setEncoding(new Encoding('UTF-8'))
  ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
  ->setSize(300);

$writer = new PngWriter();
$result = $writer->write($qrCode);

// Exibir QR Code como imagem
echo $result->getString();
