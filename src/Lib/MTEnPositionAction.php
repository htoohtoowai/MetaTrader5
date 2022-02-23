<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class get position types
 */
class MTEnPositionAction
{
    const POSITION_BUY  = 0; // buy
  const POSITION_SELL = 1; // sell
  //--- enumeration borders
  const POSITION_FIRST = MTEnPositionAction::POSITION_BUY;
    const POSITION_LAST  = MTEnPositionAction::POSITION_SELL;
}
