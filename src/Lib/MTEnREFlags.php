<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Requests Execution flags
 */
  class MTEnREFlags
  {
      const RE_FLAGS_NONE  = 0; // none
  const RE_FLAGS_ORDER = 1; // confirm orders after price confirmation
  //--- enumeration borders
  const RE_FLAGS_ALL = MTEnREFlags::RE_FLAGS_ORDER;
  }
