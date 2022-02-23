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
class MTPositionPageAnswer
{
    public $RetCode = '-1';
    public $ConfigJson = '';
    /**
     * From json get class MTPosition
     * @return array(MTPosition)
     */
    public function GetArrayFromJson()
    {
        $objects = MTJson::Decode($this->ConfigJson);
        if ($objects == null) {
            return null;
        }
        $result = array();
        //---
        foreach ($objects as $obj) {
            $info = MTPositionJson::GetFromJson($obj);
            //---
            $result[] = $info;
        }
        //---
        $objects = null;
        //---
        return $result;
    }
}
