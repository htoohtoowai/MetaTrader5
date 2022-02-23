<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
  /**
   * answer on request time_get
   */
  class MTTimeGetAnswer
  {
      public $RetCode = '-1';
      public $ConfigJson = '';
      /**
       * From json get class MTConTime
       * @return MTConTime
       */
      public function GetFromJson()
      {
          $obj = MTJson::Decode($this->ConfigJson);
          if ($obj == null) {
              return null;
          }
          //---
          $result = new MTConTime();
          //---
          $result->Daylight      = (int)$obj->Daylight;
          $result->DaylightState = (int)$obj->DaylightState;
          $result->TimeServer    = (string)$obj->TimeServer;
          $result->TimeZone      = (int)$obj->TimeZone;
          $result->Days          = $obj->Days;
          //---
          $obj = null;
          //---
          return $result;
      }
  }
