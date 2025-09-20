<?php
require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;

// Função CRC16 para PIX
function crcChecksum($str)
{
    $polynomial = 0x1021;
    $result = 0xFFFF;
    for ($i = 0; $i < strlen($str); $i++) {
        $result ^= (ord($str[$i]) << 8);
        for ($j = 0; $j < 8; $j++) {
            if (($result & 0x8000) > 0) {
                $result = (($result << 1) ^ $polynomial) & 0xFFFF;
            } else {
                $result = ($result << 1) & 0xFFFF;
            }
        }
    }
    return strtoupper(str_pad(dechex($result), 4, '0', STR_PAD_LEFT));
}

// Dados PIX
$pixKey = "chavepix@amparo.org";
$nome = "Amparo Animal";
$cidade = "Ouricuri";

$payload = "00020126360014BR.GOV.BCB.PIX01" .
    str_pad(strlen($pixKey), 2, "0", STR_PAD_LEFT) . $pixKey .
    "52040000" .
    "5303986" .
    "5802BR" .
    "59" . str_pad(strlen($nome), 2, "0", STR_PAD_LEFT) . $nome .
    "60" . str_pad(strlen($cidade), 2, "0", STR_PAD_LEFT) . $cidade .
    "62070503***";

$payload .= "6304" . crcChecksum($payload . "6304");

// Gerar QR Code
$qrCode = QrCode::create($payload)
    ->setEncoding(new Encoding('UTF-8'))
    ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
    ->setSize(250);

$writer = new PngWriter();
header('Content-Type: image/png');
echo $writer->write($qrCode)->getString();
