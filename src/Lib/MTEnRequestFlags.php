<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Request Execution Flags
 */
class MTEnRequestFlags
{
    const REQUEST_FLAGS_NONE  = 0; // node
  const REQUEST_FLAGS_ORDER = 1; // trade orders should be additional confirmed after quotation
  //--- flags borders
  const REQUEST_FLAGS_ALL = MTEnRequestFlags::REQUEST_FLAGS_ORDER;
}
