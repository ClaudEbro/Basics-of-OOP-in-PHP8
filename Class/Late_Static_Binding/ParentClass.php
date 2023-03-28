<?php

namespace Class\Late_Static_Binding;

/* ============================== Before Late Static Binding ==========================*/

/*class ParentClass {

    protected string $name = 'ParentClass';

    public function getName():string {

        var_dump(get_class($this));

        return $this->name;
    }
}*/

/* ============================== Late Static Binding ==========================*/
class ParentClass {

    protected static string $name = 'ParentClass';

    public static function getName():string {

        //return self::$name;

        return static::$name;
    }

    public function factory():static 
    {
       return new static; //To retrieve the right class contrary to "self".
    }
}