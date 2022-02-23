<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class for send request authorization mode
 */

class MTEnAuthMode
{
    const AUTH_STANDARD   = 0; // standard authorization
  const AUTH_RSA1024    = 1; // RSA1024 certificate
  const AUTH_RSA2048    = 2; // RSA2048 certificate
  const AUTH_RSA_CUSTOM = 3; // RSA custom
  //--- enumeration borders
  const AUTH_FIRST = MTEnAuthMode::AUTH_STANDARD;
    const AUTH_LAST  = MTEnAuthMode::AUTH_RSA_CUSTOM;
}
