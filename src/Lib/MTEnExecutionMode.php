<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * order execution modes
 */
class MTEnExecutionMode
{
    const EXECUTION_REQUEST  = 0; // Request Execution
  const EXECUTION_INSTANT  = 1; // Instant Execution
  const EXECUTION_MARKET   = 2; // Market Execution
  const EXECUTION_EXCHANGE = 3; // Exchange Execution
  //--- enumeration borders
  const EXECUTION_FIRST = MTEnExecutionMode::EXECUTION_REQUEST;
    const EXECUTION_LAST  = MTEnExecutionMode::EXECUTION_EXCHANGE;
}
