<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class for internal email modes
 */

class MTEnMailMode
{
    const MAIL_MODE_DISABLED = 0; // disable internal email
  const MAIL_MODE_FULL     = 1; // enable internal email
  //--- enumeration borders
  const MAIL_MODE_FIRST = MTEnMailMode::MAIL_MODE_DISABLED;
    const MAIL_MODE_LAST  = MTEnMailMode::MAIL_MODE_FULL;
}
