<?php
namespace PhpExam\Task2;

use DateTime;

class CinemaTicket 
{
    public string $movieName;
    public string $location;
    public DateTime $date;
    public float $price;

    public function __construct(string $movieName, string $location, DateTime $date, float $price)
    {
        $this->movieName = $movieName;
        $this->location = $location;
        $this->date = $date;
        $this->price = $price;
    }

}