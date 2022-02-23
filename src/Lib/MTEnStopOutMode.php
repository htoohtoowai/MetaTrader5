<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class for stop-out mode
 */
  
class MTEnStopOutMode
{
    const STOPOUT_PERCENT = 0; // stop-out in percent
  const STOPOUT_MONEY   = 1; // stop-out in money
  //--- enumeration borders
  const STOPOUT_FIRST = MTEnStopOutMode::STOPOUT_PERCENT;
    const STOPOUT_LAST  = MTEnStopOutMode::STOPOUT_MONEY;
}
