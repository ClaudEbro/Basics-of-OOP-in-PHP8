<?php

namespace Class\Interface;

interface PDFDownloader {

    //You can only define methods in public and define constants. Attributes can not define.
    //You can also extend other interfaces.

    public function downloadPDF():string; 
}