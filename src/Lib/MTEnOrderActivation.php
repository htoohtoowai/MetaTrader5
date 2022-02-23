<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * order activation state
 */
class MTEnOrderActivation
{
    const ACTIVATION_NONE       = 0; // none
  const ACTIVATION_PENDING    = 1; // pending order activated
  const ACTIVATION_STOPLIMIT  = 2; // stop-limit order activated
  const ACTIVATION_EXPIRATION = 3;
    const ACTIVATION_STOPOUT    = 4;  // order activate for stop-out
    //--- enumeration borders
    const ACTIVATION_FIRST = MTEnOrderActivation::ACTIVATION_NONE;
    const ACTIVATION_LAST  = MTEnOrderActivation::ACTIVATION_STOPOUT;
}
