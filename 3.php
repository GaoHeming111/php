<?php
    //define(NAME,VALUE); 定义常量
    // 常量一经定义就不能改变
    define('TEST','this is a test');
    echo TEST;

    // 使用const 定义常量
    const USER = 'GAO'

    // constant() 根据常量的名称获取常量的值
    constant('USER')

    // defined() 检测常量是否存在
    defined('USER') //返回true

    // 获取所有已定义的常量,包括系统常量，返回的是一个数组
    get_defined_constants()