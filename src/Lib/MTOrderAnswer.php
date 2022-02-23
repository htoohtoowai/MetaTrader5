<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * get order page answer
 */
class MTOrderAnswer
{
    public $RetCode = '-1';
    public $ConfigJson = '';
    /**
     * From json get class MTOrder
     * @return array(MTOrder)
     */
    public function GetFromJson()
    {
        $obj = MTJson::Decode($this->ConfigJson);
        if ($obj == null) {
            return null;
        }
        //---
        return MTOrderJson::GetFromJson($obj);
    }
}
