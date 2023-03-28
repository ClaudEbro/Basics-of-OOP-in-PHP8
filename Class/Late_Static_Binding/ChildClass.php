<?php

namespace Class\Late_Static_Binding;

/*class ChildClass extends ParentClass {

    protected string $name = 'ChildClass';

}*/ 



/* ============================== Late Static Binding ========================== */

class ChildClass extends ParentClass {

    protected static string $name = 'ChildClass';

} 