<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * permissions
 */
class MTEnGroupSymbolPermissions
{
    const PERMISSION_NONE = 0;
    const PERMISSION_BOOK = 1;
    //--- enumeration borders
    const PERMISSION_DEFAULT = MTEnGroupSymbolPermissions::PERMISSION_BOOK;
    const PERMISSION_ALL     = MTEnGroupSymbolPermissions::PERMISSION_BOOK;
}
