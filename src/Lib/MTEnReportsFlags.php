<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class forreports generation flags
 */
class MTEnReportsFlags
{
    const REPORTSFLAGS_NONE       = 0; // none
  const REPORTSFLAGS_EMAIL      = 1; // send reports through email
  const REPORTSFLAGS_SUPPORT    = 2; // send reports copies on support email
  const REPORTSFLAGS_STATEMENTS = 4; // generate reports
  //--- enumeration borders
  const REPORTSFLAGS_ALL = 7;
}
