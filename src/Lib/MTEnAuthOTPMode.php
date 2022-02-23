<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * Class for One-Time-Password mode
 */

class MTEnAuthOTPMode
{
    const AUTH_OTP_DISABLED        = 0;
    const AUTH_OTP_TOTP_SHA256     = 1;
    const AUTH_OTP_TOTP_SHA256_WEB = 2;
    //--- enumeration borders
    const AUTH_OTP_FIRST = MTEnAuthOTPMode::AUTH_OTP_DISABLED;
    const AUTH_OTP_LAST  = MTEnAuthOTPMode::AUTH_OTP_TOTP_SHA256_WEB;
}
