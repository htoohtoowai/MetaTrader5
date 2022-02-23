<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * get position page answer
 */
class MTPositionAnswer
{
    public $RetCode = '-1';
    public $ConfigJson = '';
    /**
     * From json get class MTPosition
     * @return array(MTPosition)
     */
    public function GetFromJson()
    {
        $obj = MTJson::Decode($this->ConfigJson);
        if ($obj == null) {
            return null;
        }
        //---
        return MTPositionJson::GetFromJson($obj);
    }
}
