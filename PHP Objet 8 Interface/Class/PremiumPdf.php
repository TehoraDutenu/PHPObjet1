<?php

namespace Class;

class PremiumPdf implements PdfDownloader
{
    public function __construct()
    {
        echo 'constructeur de PremiumPdf';
    }

    public function downloadPdf(?int $size = null): string
    {
        return 'PDF Premium téléchargé avec succès';
    }
}
