<?php

namespace Class\Heritage;

class PremiumCoffeeMachine extends CoffeeMachine {

    public function __construct(int $cups)
    {
        var_dump('Customerized code of Premium');
        parent::__construct($cups);
    }

    public function select(string $selection)
    {
        $result = match($selection) {
            'espresso' => $this->makeEspresso(),
            'vanilla' => $this->makeVanilla(),
            default => 'Error'
        };

        return $result;
    }

    protected function makeVanilla()
    {
        for($i = 0; $i<$this->cups; $i++)
        {
            echo 'Coffee Vanilla n°'. $i+1 .' servi ! ';
        }
    }
}