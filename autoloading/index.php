<?php

// Without composer and autoload

require_once './Email.php';
require_once './Person.php';
require_once '../my-log.php';

// We can use 'use' to avoid the 'App' prefix
use App\Person;
$person = new Person("Pedro Reis");

// Or we can create an instane passing the full class namespace;
$email = new App\Email("pedro@gmail.com");

// Composer and autoload
// https://www.hostinger.com.br/tutoriais/como-instalar-e-usar-o-composer

/**
 * With composer and autoload, we just require one file
 * Instead of requiring multiple files per class
 * And use 'use' to the classes we want
 * The autoload file will load all the classes we need
 */

require_once './vendor/autoload.php';

use App\Email;

$email2 = new Email("second@gmail.com");

myLog($email2);

// Testing 3rd packages

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel

// Monolog
$log = new Logger('log');
$log->pushHandler(new StreamHandler('logs/log-22-02-2002.log', Logger::WARNING));

// add records to the log
$log->warning('Some warning');
$log->error('Some error', ['type' => 'test']);

// Cowsay
use Cowsayphp\Farm;

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
myLog($cow->say("Ohmg I'm a cow!"));

?>