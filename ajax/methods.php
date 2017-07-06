<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of methods
 *
 * @author dhareen
 */
class methods {

    function getJson() {
        $arr = array('0' => Array
                (
                'id' => '44',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '1' => Array
                (
               'id' => '45',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '2' => Array
                (
                'id' => '46',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '3' => Array
                (
                'id' => '47',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '4' => Array
                (
                'id' => '48',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '5' => Array
                (
              'id' => '49',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '6' => Array
                (
                'id' => '50',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '7' => Array
                (
               'id' => '51',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '8' => Array
                (
               'id' => '52',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'outbound'
            ),
            '9' => Array
                (
               'id' => '53',
                'log_time' => '2017-07-01 08:20:04',
                'sender' => '19162459143',
                'receiver' => '15597951559',
                'direction' => 'inbound'
            ),
        );
        $result = json_encode($arr);
        return $result;
    }

    function getName() {
        return "H4r3eN";
    }

}
