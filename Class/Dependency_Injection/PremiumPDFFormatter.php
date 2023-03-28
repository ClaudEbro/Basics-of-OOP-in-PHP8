<?php

namespace Class\Dependancy_Injection;

class PremiumPDFFormatter implements PDFFormatterInterface
{
    public function render(): string
    {
        return "Premium PDF... ";
    }
} 