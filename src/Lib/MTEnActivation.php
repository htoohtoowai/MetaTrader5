<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * activation modes
 */
class MTEnActivation
{
    const ACTIVATION_NONE    = 0; // none
  const ACTIVATION_SL      = 1; // SL activated
  const ACTIVATION_TP      = 2; // TP activated
  const ACTIVATION_STOPOUT = 3; // Stop-Out activated
  //--- enumeration borders
  const ACTIVATION_FIRST = MTEnActivation::ACTIVATION_NONE;
    const ACTIVATION_LAST  = MTEnActivation::ACTIVATION_STOPOUT;
}
