<?php
use PhpExam\Task2\CinemaTicket;
use PhpExam\Task2\StandardPriceCalculator;
use PhpExam\Task2\SubscriberPriceCalculator;
use PhpExam\Task2\NewCustomerPriceCalculator;
use PhpExam\Task2\OrderProcessor;

require_once "../vendor/autoload.php";

$ticket1 = new CinemaTicket("Lorem Ipsum", "Kaunas", new DateTime, 10);
$ticket2 = new CinemaTicket("Sit Amet", "Kaunas", new DateTime, 14);
$ticket3 = new CinemaTicket("Dolores Quanto", "Kaunas", new DateTime, 8);

$standardCalculator = new StandardPriceCalculator;
$subscriberCalculator = new SubscriberPriceCalculator;
$newCustomerCalculator = new NewCustomerPriceCalculator;

$standardOrderProcessor = new OrderProcessor($standardCalculator);
$subscriberOrderProcessor = new OrderProcessor($subscriberCalculator);
$newCustomerOrderProcessor = new OrderProcessor($newCustomerCalculator);

$standardOrderProcessor->addItem($ticket1);
$standardOrderProcessor->addItem($ticket2);
$standardOrderProcessor->addItem($ticket3);
echo $standardOrderProcessor->calculatePrice() . " - standartinio užsakymo kaina" . PHP_EOL;

$subscriberOrderProcessor->addItem($ticket1);
$subscriberOrderProcessor->addItem($ticket2);
$subscriberOrderProcessor->addItem($ticket3);
echo $subscriberOrderProcessor->calculatePrice() . " - prenumeratoriaus užsakymo kaina" . PHP_EOL;

$newCustomerOrderProcessor->addItem($ticket1);
$newCustomerOrderProcessor->addItem($ticket2);
$newCustomerOrderProcessor->addItem($ticket3);
echo $newCustomerOrderProcessor->calculatePrice() . " - naujo pirkėjo užsakymo kaina" . PHP_EOL;