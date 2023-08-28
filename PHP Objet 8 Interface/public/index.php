<?php

use Class\BasicPdf;
use Class\PdfDownloaderService;
use Class\PremiumPdf;

require '../vendor/autoload.php';

//$basicPdf = new BasicPdf();
//var_dump($basicPdf->downloadPdf());
// var_dump($basicPdf->downloadhtml());

// - Instancier
$basicPdf = new BasicPdf();
$premiumPdf = new PremiumPdf();

$pdfDownloaderService = new PdfDownloaderService();

var_dump($pdfDownloaderService->downloadPdf($basicPdf));
var_dump($pdfDownloaderService->downloadPdf($premiumPdf));
