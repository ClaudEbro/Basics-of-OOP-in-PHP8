<?php

namespace Class\Interface;


class PDFDownloaderService {

    public function downloadPDF(PDFDownloader $basicPDF) {

        return $basicPDF->downloadPDF();
    }
}