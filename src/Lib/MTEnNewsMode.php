<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class news modes
 */
class MTEnNewsMode
{
    const NEWS_MODE_DISABLED = 0; // disable news
  const NEWS_MODE_HEADERS  = 1; // enable only news headers
  const NEWS_MODE_FULL     = 2; // enable full news
  //--- enumeration borders
  const NEWS_MODE_FIRST = MTEnNewsMode::NEWS_MODE_DISABLED;
    const NEWS_MODE_LAST  = MTEnNewsMode::NEWS_MODE_FULL;
}
