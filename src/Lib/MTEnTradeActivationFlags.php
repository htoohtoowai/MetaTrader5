<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * order activation flags
 */
class MTEnTradeActivationFlags
{
    const ACTIV_FLAGS_NO_LIMIT      = 0x01;
    const ACTIV_FLAGS_NO_STOP       = 0x02;
    const ACTIV_FLAGS_NO_SLIMIT     = 0x04;
    const ACTIV_FLAGS_NO_SL         = 0x08;
    const ACTIV_FLAGS_NO_TP         = 0x10;
    const ACTIV_FLAGS_NO_SO         = 0x20;
    const ACTIV_FLAGS_NO_EXPIRATION = 0x40;
    //---
    const ACTIV_FLAGS_NONE = 0x00;
    const ACTIV_FLAGS_ALL  = 0x7F;
}
