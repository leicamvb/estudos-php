<?php
namespace Sources\Inheritance\Event;

class Event{
    private $event;
    private $date;
    private $price;
    protected $vacancies;
    private $register;

    //\DateTime
    public function __construct($event,  $date, $price, $vacancies = 10){
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email){
        if ($this->vacancies >= 1){
            $this->vacancies -= 1;
            echo "<p class='trigger accept'> Parabéns! {$fullName}</p>";
        }else{
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!<p>";
        }
    }

    protected function setRegister($fullName, $email){
        $this->register=[
            "name" => $fullName,
            "email" => $email,
        ];
    }

    public function getDate(){
        return $this->date->format('d/m/Y H:i');
    }

    public function getPrice(){
        return number_format($this->price, 2, ",", ".");
    }

    public function getEvent(){
        return $this->event;
    }
}