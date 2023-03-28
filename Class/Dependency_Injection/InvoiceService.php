<?php

namespace Class\Dependancy_Injection;

class InvoiceService
{
    public function __construct(
        private TaxCalculator $calculator,
        private PDFFormatterInterface $formatter,
        private EmailService $service
    )
    {}

    public function generate (int|float $price)
    {
        //Calculate tax
        echo $this->calculator->calculate($price);

        //Generate PDF
        echo '<br />';
        echo $this->formatter->render();

        //Send email
        echo '<br />';
        echo $this->service->send();
    }
}