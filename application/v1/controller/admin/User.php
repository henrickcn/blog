<?php
// +----------------------------------------------------------------------
// | Title   : 用户管理
// +----------------------------------------------------------------------
// | Created : Henrick (me@hejinmin.cn)
// +----------------------------------------------------------------------
// | From    : Shenzhen wepartner network Ltd
// +----------------------------------------------------------------------
// | Date    : 2018/6/28 19:52
// +----------------------------------------------------------------------


namespace app\v1\controller\admin;


use app\common\controller\AdminController;

class User extends AdminController
{
    function index(){

    }

    function login(){
         return $this->_response(1);
    }
}