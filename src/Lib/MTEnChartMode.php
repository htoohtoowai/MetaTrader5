<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * chart mode
 */
class MTEnChartMode
{
    const CHART_MODE_BID_PRICE  = 0;
    const CHART_MODE_LAST_PRICE = 1;
    const CHART_MODE_OLD        = 255;
    //--- enumeration borders
    const CHART_MODE_FIRST = MTEnChartMode::CHART_MODE_BID_PRICE;
    const CHART_MODE_LAST  = MTEnChartMode::CHART_MODE_OLD;
}
