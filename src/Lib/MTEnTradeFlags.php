<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * common trade flags
 */
class MTEnTradeFlags
{
    const TRADE_FLAGS_NONE             = 0; // none
  const TRADE_FLAGS_PROFIT_BY_MARKET = 1; // convert fx profit using market prices
  const TRADE_FLAGS_ALLOW_SIGNALS    = 2; // allow trade signals for symbol
  //--- flags borders
  const TRADE_FLAGS_ALL     = 3; // TRADE_FLAGS_PROFIT_BY_MARKET | TRADE_FLAGS_ALLOW_SIGNALS
  const TRADE_FLAGS_DEFAULT = MTEnTradeFlags::TRADE_FLAGS_ALLOW_SIGNALS;
}
