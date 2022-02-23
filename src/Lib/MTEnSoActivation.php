<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * activation method
 */
class MTEnSoActivation
{
    const ACTIVATION_NONE        = 0;
    const ACTIVATION_MARGIN_CALL = 1;
    const ACTIVATION_STOP_OUT    = 2;
    //---
    const ACTIVATION_FIRST = ACTIVATION_NONE;
    const ACTIVATION_LAST = ACTIVATION_STOP_OUT;
}
