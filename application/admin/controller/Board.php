<?php
namespace app\admin\controller;
use think\Controller;

class Board extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
