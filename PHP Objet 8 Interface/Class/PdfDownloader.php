<?php

namespace Class;


interface PdfDownloader
{
    public function __construct();

    public function downloadPdf(?int $size = null): string;
}
