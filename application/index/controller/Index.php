<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
   /* protected $middleware =  [
        'Check'
    ];*/
    /**
     * @return view/index/index.html
     * Desc:   首页
     */
    public function index()
    {
        $this->assign('title','首页');
        return $this->fetch();
    }

    /**
     * @return view/index/about.html
     * Desc:  关于我们
     */
    public function about(){
        $this->assign('title','关于我们');
        return $this->fetch();
    }

    /**
     * @return view/index/contact.html
     * Desc:  联系我们
     */
    public function contact(){
        $this->assign('title','联系我们');
        return $this->fetch();
    }

    /**
     * @return view/index/service.html
     * Desc:  公司服务
     */
    public function services(){
        $this->assign('title','公司服务');
        return $this->fetch();
    }

    /**
     * @param string $name
     * @return hello name
     * Desc:  ThinkPHP测试用方法
     */
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
