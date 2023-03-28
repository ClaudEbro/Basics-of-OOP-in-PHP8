<?php

namespace Class\Interface;


//You can implement more interfaces.

class BasicPDF implements PDFDownloader, HTMLDownloader {

    public function __construct() {

        echo 'OK'.'<br>';  
    }

    public function downloadPDF():string {
        return 'PDF downloaded (Basic)'.'<br>';
    }

    public function downloadHTML(?int $size = null):string {
        return 'HTML downloaded (Basic)';
    }
}