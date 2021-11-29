<?php

namespace Hameddeveloper64\library;

/**
 *
 */
class Persian_date
{

  public function today(){
    return date("Y-m-d");
  }
  public function yesterday(){
      return date("Y-m-d",strtotime("-1 days"));
  }
  public function thisWeek(){
      
  }
}


 ?>
