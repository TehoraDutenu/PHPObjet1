<?php

namespace Class;

class PdfDownloaderService
{
    // - Méthode downloadPdf avec pour argument une instance de basicPdf
    public function downloadPdf(PdfDownloader $basicPdf): string
    {
        return $basicPdf->downloadPdf();
    }
}
