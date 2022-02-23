<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * day working mode
 */
class MTEnTimeTableMode
{
    const TIME_MODE_DISABLED = 0; // work enabled
  const TIME_MODE_ENABLED  = 1; // work disabled
  //---
  const TIME_MODE_FIRST = MTEnTimeTableMode::TIME_MODE_DISABLED;
    const TIME_MODE_LAST  = MTEnTimeTableMode::TIME_MODE_ENABLED;
}
