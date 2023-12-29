<?php 
// object orintted Programming
// مجموعة من الكائنات لها علاقة مع بعضها  لو مش فاهم  المعني الانجلش 


// class  - object

class Persone {
  public $name;
  public  $age;
  public  $sallery;
  public  $overTime;
  public  $rateOverTime;
  public $appsent;
  public $rateAppsent;
  public $tax;
}

$ahmed=new Persone();
$abdo=new Persone();

// calc rateOverTime
function calcOverTime($overTime,$rateOverTime) {
return $overTime*$rateOverTime;
};

$ahmed->name="ahmed";
var_dump( $ahmed->name);