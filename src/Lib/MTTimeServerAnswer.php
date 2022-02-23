<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
  /**
   * answer on request time_server
   */
  class MTTimeServerAnswer
  {
      public $RetCode = '-1';
      public $Time = 'none';
      /**
       * Get time in unix format
       * @return int
       */
      public function GetUnixTime()
      {
          $p = explode(" ", $this->Time, 2);
          return (int)$p[0];
      }
  }
