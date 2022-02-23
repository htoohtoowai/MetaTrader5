<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Live Update modes to MetaTrader 5 Server
 */
class MTEnUpdateMode
{
    const UPDATE_DISABLE     = 0; // disable LiveUpdate
  const UPDATE_ENABLE      = 1; // enable LiveUpdate
  const UPDATE_ENABLE_BETA = 2; // enable LiveUpdate, including beta releases
  //--- enumeration borders
  const UPDATE_FIRST = MTEnUpdateMode::UPDATE_DISABLE;
    const UPDATE_LAST  = MTEnUpdateMode::UPDATE_ENABLE_BETA;
}
