<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * get tick answer
 */
class MTTickAnswer
{
    public $RetCode = '-1';
    public $TransId = 0;
    public $ConfigJson = '';
    /**
     * From json get class MTTick
     * @return array(MTTick)
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
            $info = MTTickJson::GetFromJson($obj);
            //---
            $result[] = $info;
        }
        //---
        $objects = null;
        //---
        return $result;
    }
}
