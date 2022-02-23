<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
  
/**
 * Splice Type
 * Class MTEnSpliceType
 */
class MTEnSpliceType
{
    const SPLICE_NONE       = 0;
    const SPLICE_UNADJUSTED = 1;
    const SPLICE_ADJUSTED   = 2;
    //--- enumeration borders
    const SPLICE_FIRST = MTEnSpliceType::SPLICE_NONE;
    const SPLICE_LAST  = MTEnSpliceType::SPLICE_ADJUSTED;
}
