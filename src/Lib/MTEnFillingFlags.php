<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * allowed filling modes flags
 */
class MTEnFillingFlags
{
    const FILL_FLAGS_NONE = 0; // none
  const FILL_FLAGS_FOK  = 1; // allowed FOK
  const FILL_FLAGS_IOC  = 2; // allowed IOC
  //--- flags borders
  const FILL_FLAGS_FIRST = MTEnFillingFlags::FILL_FLAGS_FOK;
    const FILL_FLAGS_ALL   = 3; //MTEnFillingFlags::FILL_FLAGS_FOK | MTEnFillingFlags::FILL_FLAGS_IOC;
}
