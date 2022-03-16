<?php
namespace app\admin\controller;
use think\Controller;

class Manage extends Controller
{
    public function index(){
        return $this->fetch();
    }
    public function edit(){
        return $this->fetch();
    }
}
