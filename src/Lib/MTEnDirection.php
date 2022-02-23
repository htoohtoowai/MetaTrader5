<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * MTEnDirection
 */
class MTEnDirection
{
    const DIR_NONE = 0; // direction unknown
  const DIR_UP   = 1; // price up
  const DIR_DOWN = 2; // price down
  //--- enumeration borders
  const DIR_FIRST = MTEnDirection::DIR_NONE;
    const DIR_LAST  = MTEnDirection::DIR_DOWN;
}
