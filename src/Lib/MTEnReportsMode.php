<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class for reports generation mode
 */

class MTEnReportsMode
{
    const REPORTS_DISABLED = 0; // reports disabled
  const REPORTS_STANDARD = 1; // standard mode
  //--- enumeration borders
  const REPORTS_FIRST = MTEnReportsMode::REPORTS_DISABLED;
    const REPORTS_LAST  = MTEnReportsMode::REPORTS_STANDARD;
}
