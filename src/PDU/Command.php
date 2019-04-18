<?php

namespace PE\Component\SMPP\PDU;

class Command
{
    public static function bindTransmitter(){}
    public static function bindTransmitterResp(){}
    public static function bindReceiver(){}
    public static function bindReceiverResp(){}
    public static function bindTransceiver(){}
    public static function bindTransceiverResp(){}
    public static function outbind(){}
    public static function unbind(){}
    public static function unbindResp(){}
    public static function genericNACK(){}
    public static function submitSM(){}
    public static function submitSMResp(){}
    public static function submitMulti(){}
    public static function submitMultiResp(){}
    public static function deliverSM(){}
    public static function deliverSMResp(){}
    public static function dataSM(){}
    public static function dataSMResp(){}
    public static function querySM(){}
    public static function querySMResp(){}
    public static function cancelSM(){}
    public static function cancelSMResp(){}
    public static function replaceSM(){}
    public static function replaceSMResp(){}
    public static function enquireLink(){}
    public static function enquireLinkResp(){}
    public static function alertNotification(){}
}
