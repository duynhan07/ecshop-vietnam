<?php

/**
 * ECSHOP v2.1.1 升级程序
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Date: 2011-01-19 14:29:08 +0800 (星期三, 2011-01-19) $
 * $Id: v2.1.1.php 17217 2011-01-19 06:29:08Z liubo $
 */

class up_v2_1_1
{
    var $sql_files = array(
                            'structure' => 'structure.sql',
                            'data' =>'data.sql');

    var $auto_match = true;

    function __construct(){}
    function up_v2_1_1(){}
    
    function update_database_optionally(){}
    function update_files(){}
}

?>