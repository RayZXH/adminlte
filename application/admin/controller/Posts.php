<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;

class Posts extends Controller
{
    public function add()
    {
        return $this->fetch();
    }
    public function posts()
    {
        return $this->fetch();
    }
    public function draft()
    {
        return $this->fetch();
    }
    
}
