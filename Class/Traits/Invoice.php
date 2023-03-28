<?php

namespace Class\Traits;
use Class\Traits\Mailable;

class Invoice
{
    use Mailable;

    public function download(): string
    {
        return 'Download';
    }
}