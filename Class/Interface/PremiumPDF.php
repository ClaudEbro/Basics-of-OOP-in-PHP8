<?php

namespace Class\Interface;


class PremiumPDF implements PDFDownloader {

    public function downloadPDF(?int $size = null):string {
        return 'HTML downloaded (Premium)';
    }
}