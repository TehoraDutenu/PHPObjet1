<?php

namespace Class;

// use Class\PdfDownloader;
// use Class\HtmlDownloader;


class BasicPdf implements PdfDownloader
{
    public function __construct()
    {
        echo 'constructeur de BasicPdf';
    }

    public function downloadPdf(?int $size = null): string
    {
        return 'PDF téléchargé avec succès';
    }

    // public function downloadHTML(?int $size = null): string
    // {
    //     return 'HTML téléchargé avec succès';
    // }
}
