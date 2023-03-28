<?php

/* ================================ BASIC CLASS =========================== */

/*require_once('./Class/Cart_with_php_8.php'); //To retrieve the class Cart.

$cart = new Cart(0,100); // To create a new instance of Cart.
$cart->discount(5);*/

// require_once('./Class/Paypal/Payment.php'); Without autoloader
// require_once('./Class/Stripe/Payment.php');
// require_once('./Class/Users/User.php');

//Create an autoloader to retrieve namespaces
// spl_autoload_register(function ($class) {
//     $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class). '.php';

//     if (file_exists($path)) {
//         require $path;
//     }
// });

/*use Class\Paypal\Payment as PaypalPayment; //To avoid fully qualified name by using an alias
use \Class\Stripe\Payment;
use \Colors\RandomColor;

//We can define a new instance with the namespace by its fully qualified name ($paymentPaypal = new Class\Paypal\Payment(); )

$paymentPaypal = new PaypalPayment(); 
$paymentStripe = new Payment();

var_dump(RandomColor::one());*/


/* ================================ CONST and ENUM =========================== */

/*use Class\OfficeReservation;
use Class\Enums\OfficeStatus;

require '../vendor/autoload.php';

//To display the status from the class OfficeReservation

$reservation = new OfficeReservation();

if (OfficeStatus::APPROVAL_PENDING === $reservation->status) echo 'pending !'; */


/* ============================ STATIC METHOD PROPERTIES ========================= */

/*use Class\Reservation;

require '../vendor/autoload.php';


//To retrieve $count value
var_dump(Reservation::getInstance());
var_dump(Reservation::getInstance());
var_dump(Reservation::getInstance());
var_dump(Reservation::getInstance());*/


/* ================================= HERITAGE ===================================== */

/*use Class\Heritage\CoffeeMachine;
use Class\Heritage\PremiumCoffeeMachine;

require '../vendor/autoload.php';

$coffeeMachine = new PremiumCoffeeMachine(2);
$coffeeMachine->select('espresso');*/


/* ================================= ABSTRACT ===================================== */

/*use Class\Abstract\Vehicle;
use Class\Abstract\Mercedes;
use Class\Abstract\Bmw;


require '../vendor/autoload.php';

$mercedes = new Mercedes('mercedes');
var_dump($mercedes->mark());

$bmw = new Bmw('bmw');
var_dump($bmw->mark());*/


/* ================================= INTERFACE ===================================== */


/*use Class\Interface\BasicPDF;
//use Class\Interface\PDFDownloader;
use Class\Interface\PremiumPDF;
use Class\Interface\PDFDownloaderService;


require '../vendor/autoload.php';

$basicPDF = new BasicPDF();
$premiumPDF = new PremiumPDF();


var_dump($basicPDF->downloadPDF(), $basicPDF->downloadHTML());

$PDFDownloaderService = new PDFDownloaderService();
var_dump($PDFDownloaderService->downloadPDF($premiumPDF));*/


/* ============================= LATE STATIC BINDING ============================== */

// use Class\Late_Static_Binding\ParentClass;
// use Class\Late_Static_Binding\ChildClass;

// require '../vendor/autoload.php';


/* ======== Before Late Static Binding =============*/

// $parent = new ParentClass();
// $child = new ChildClass();

// var_dump($parent->getName(), $child->getName());


/* ======== With Late Static Binding ===============*/

/*var_dump(ParentClass::getName(), ChildClass::getName()); //with Late Static Binding 

$parent = new ParentClass();
$child = new ChildClass();


var_dump($parent->factory());
var_dump($parent->factory());
var_dump($parent->factory());
var_dump($parent->factory());

var_dump($child->factory());
var_dump($child->factory());
var_dump($child->factory());
var_dump($child->factory());*/

/* ============================== TRAITS ==========================


use Class\EspressoMachine;
use Class\IrishCoffeeMachine;
use Class\MultiCoffeeMachine;

require '../vendor/autoload.php';


$espresso = new EspressoMachine();
$irishCoffee = new IrishCoffeeMachine();
$multiCoffeeMachine  = new MultiCoffeeMachine();

var_dump (
    $multiCoffeeMachine->makeEspresso(),
    $multiCoffeeMachine->makeIrishCoffee(),
    $multiCoffeeMachine->makeCoffee()
);*/


/* ============================== EXCEPTIONS =======================================*/


/*use Class\Exception\User;
use Class\Exception\Login;
use Class\Exception\UserNotVerifiedException;
use Class\Exception\UserIsBanException;

require '../vendor/autoload.php';

$user = new User('claudio', 'password');
$login = new Login($user);

try{
    $login->login();
} catch (UserNotVerifiedException $e){
    echo $e->getMessage().' in file '.$e->getFile();
}catch (UserIsBanException $e){
    echo $e->getMessage().' in file '.$e->getFile();
} finally {
    echo 'finally';
}*/

/* ====================================================================================*/


/* ======================================== ROUNTING ==================================*/

//Build your own Routes



// use Router\Router;
// use Source\App;


// require './../vendor/autoload.php';


// define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

// $router = new Router();

// $router->register('/get', ['Controllers\HomeController', 'index']);
// $router->register('/post', ['Controllers\ContactController', 'store']);


// (new App($router, [
//     'uri' => $_SERVER['REQUEST_URI'],
//     'request' => $_SERVER['REQUEST_METHOD']
// ]))->run();



/* ======================================== MODELS ANS ENUM ==================================

//Work with database

use Router\Router;
use Source\App;



require '../vendor/autoload.php';


define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->get('/', ['Controllers\HomeController', 'index']);
$router->get('/orders', ['Controllers\OrderController', 'index']);


(new App($router, [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
]))->run();

================================================================================================*/

/* ======================================== DEPENDENCY INJECTION ================================/

use DI\Container;
use Class\Dependency_Injection\InvoiceService;


// use Class\Dependency_Injection\TaxCalculator;
// use Class\Dependency_Injection\PDFFormatter;
// use Class\Dependency_Injection\PremiumPDFFormatter;
// use Class\Dependency_Injection\EmailService;

require './../vendor/autoload.php';

$container = new Container();
$invoiceService = $container->get(InvoiceService::class);

echo $invoiceService->generate(12);

================================================================================================*/


/* ======================================== SOLID PRINCIPLES ================================*/

require './../vendor/autoload.php';

// class UserController 
// {
//     public function show(string $username=null): string 
//     {
//         $username = $this->checkUsername($username);
        
//         return 'Profile of ' .$username;
//     }

//     public function checkUsername(?string $username ): string 
//     {
//         if(is_null($username)){
//             $username = 'visitor';
//         }
//         return $username;
//     }
// }

// $controller = new UserController();
// echo $controller->show('Mike');
// echo $controller->show();

class PaypalPayment
    {
        public function processPayPal(int|float $price): string
        {
            return 'Price to pay ' .$price. '$';
        }
    } 

    class StripePayment
    {
        public function processStripe(int|float $price): string
        {
            return 'Price to pay ' .$price. '$';
        }
    }
    
    class PaymentController
    {
        public function store(int|float $price, $payment)
        {
            if($payment instanceof PaypalPayment){
                $price = $price + ($price * 0.01);
                return $payment->processPaypal($price);
                
            } elseif($payment instanceof StripePayment){
                $price = $price + ($price * 0.03);
                return $payment->processStripe($price);    
            }
        }
    }

$controller = new PaymentController();

$paypal = new PaypalPayment();
$stripe = new StripePayment();


echo $controller->store(10, $paypal);
echo $controller->store(10, $stripe);
