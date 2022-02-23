<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Instant Execution Modes
 */
class MTEnInstantMode
{
    const INSTANT_CHECK_NORMAL = 0;
    //--- begin and end of check
    const INSTANT_CHECK_FIRST = MTEnInstantMode::INSTANT_CHECK_NORMAL;
    const INSTANT_CHECK_LAST  = MTEnInstantMode::INSTANT_CHECK_NORMAL;
}
