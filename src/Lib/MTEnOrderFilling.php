<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * order filling types
 */
class MTEnOrderFilling
{
    const ORDER_FILL_FOK    = 0; // fill or kill
  const ORDER_FILL_IOC    = 1; // immediate or cancel
  const ORDER_FILL_RETURN = 2; // return order in queue
  //--- enumeration borders
  const ORDER_FILL_FIRST = MTEnOrderFilling::ORDER_FILL_FOK;
    const ORDER_FILL_LAST  = MTEnOrderFilling::ORDER_FILL_RETURN;
}
