<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * description of tick
 */
class MTTick
{
    //--- symbol
    public $Symbol;
    //---
    public $Digits;
    //--- bid price
    public $Bid;
    //--- ask price
    public $Ask;
    //--- last price
    public $Last;
    //--- volume
    public $Volume;
    //--- volume with extended accuracy
    public $VolumeReal;
}
