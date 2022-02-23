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
class MTTickStatAnswer
{
    public $RetCode = '-1';
    public $TransId = 0;
    public $ConfigJson = '';
    /**
     * From json get class MTTickStat
     * @return array(MTTickStat)
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
            $info = MTTickStatJson::GetFromJson($obj);
            //---
            $result[] = $info;
        }
        //---
        $objects = null;
        //---
        return $result;
    }
}
