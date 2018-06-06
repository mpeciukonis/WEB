<?php
  class Athlete{
    public $name, $hundred_meters, $long_jump, $shot_put, $high_jump, $four_hundred_meters, $hundred_ten_hurdles, $discus_throw, $pole_vault, $javelin_throw, $one_half_kilometers, $total_score;

    public function __construct($Name, $Event_1, $Event_2, $Event_3, $Event_4, $Event_5, $Event_6, $Event_7, $Event_8, $Event_9, $Event_10){
      $this -> name = $Name;                      //name and suranme
      $this -> hundred_meters = $Event_1;         //100m (seconds)
      $this -> long_jump = $Event_2;              //long jump (metres)
      $this -> shot_put = $Event_3;               //shot put (metres)
      $this -> high_jump = $Event_4;              //high jump (metres)
      $this -> four_hundred_meters = $Event_5;    //400m (seconds)
      $this -> hundred_ten_hurdles = $Event_6;    //110m hurdles (seconds)
      $this -> discus_throw = $Event_7;           //discus throw (metres)
      $this -> pole_vault = $Event_8;             //pole vault (metres)
      $this -> javelin_throw = $Event_9;          //javelin throw (metres)
      $this -> one_half_kilometers = $Event_10;   //1500m (minutes:seconds)
      $this -> calculateTotalScore($Event_1, $Event_2, $Event_3, $Event_4, $Event_5, $Event_6, $Event_7, $Event_8, $Event_9, $Event_10);              //total score
    }

    private function calculateTotalScore($ev1, $ev2, $ev3, $ev4, $ev5, $ev6, $ev7, $ev8, $ev9, $ev10){
      $total_result = 0;
      $total_result = intval(25.4347*(pow((18-$ev1), 1.81)));
      $total_result = $total_result + intval(0.14354*(pow(($ev2*100-220), 1.4)));
      $total_result = $total_result + intval(51.39*(pow(($ev3-1.5), 1.05)));
      $total_result = $total_result + intval(0.8465*(pow(($ev4*100-75), 1.42)));
      $total_result = $total_result + intval(1.53775*(pow((82-$ev5), 1.81)));
      $total_result = $total_result + intval(5.74352*(pow((28.5-$ev6), 1.92)));
      $total_result = $total_result + intval(12.91*(pow(($ev7-4), 1.1)));
      $total_result = $total_result + intval(0.2797*(pow(($ev8-100), 1.35)));
      $total_result = $total_result + intval(10.14*(pow(($ev9-7), 1.08)));
      $total_result = $total_result + intval(0.03768*(pow((480-$ev10*60), 1.85)));
      $this -> total_score = $total_result;
    }
  }
 ?>
