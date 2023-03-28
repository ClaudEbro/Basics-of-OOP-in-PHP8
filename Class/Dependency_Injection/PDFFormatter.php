<?php

namespace Class\Dependancy_Injection;

class PDFFormatter implements PDFFormatterInterface
{
    public function render(): string
    {
        return "Basic PDF... ";
    }
} 