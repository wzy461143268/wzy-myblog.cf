<?php
namespace app\admin\controller;
use think\Controller;

class Opinion extends Controller
{
    public function index(){
        return $this->fetch();
    }
}
