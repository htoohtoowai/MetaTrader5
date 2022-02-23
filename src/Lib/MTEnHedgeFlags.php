<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+

/**
 * hedging flags
 */
class MTEnHedgeFlags
{
    const HEDGE_FLAGS_NONE          =0; // all disabled
  const HEDGE_FLAGS_ALLOW_CLOSEBY =1; // allow close by
  //--- flags borders
  const HEDGE_FLAGS_FIRST = MTEnHedgeFlags::HEDGE_FLAGS_ALLOW_CLOSEBY;
    const HEDGE_FLAGS_ALL   = 1; // HEDGE_FLAGS_ALLOW_CLOSEBY
}
