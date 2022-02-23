<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * deal entry direction
 */
class MTEnEntryFlags
{
    const ENTRY_IN     = 0;   // in market
  const ENTRY_OUT    = 1;   // out of market
  const ENTRY_INOUT  = 2;   // reverse
  const ENTRY_OUT_BY = 3;   // closed by  hedged position
  const ENTRY_STATE  = 255; // state record
  //--- enumeration borders
  const ENTRY_FIRST = MTEnEntryFlags::ENTRY_IN;
    const ENTRY_LAST  = MTEnEntryFlags::ENTRY_STATE;
}
