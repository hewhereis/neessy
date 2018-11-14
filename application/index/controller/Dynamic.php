<?php
/**
 * Created by PhpStorm.
 * User: Neessy
 * Date: 2018/11/9
 * Time: 16:31
 */

namespace app\index\controller;


use think\Controller;

class Dynamic extends Controller
{
    /**
     * @return view/dynamic/blog.html
     * Desc:  博客列表页面
     */
    public function blog(){
        $this->assign('title','公司新闻');
        return $this->fetch();
    }

    /**
     * @return view/dynamic/portfolio.html
     * Desc:  投资证券作品集，合作商户
     */
    public function portfolio(){
        $this->assign('title','合作商户');
        return $this->fetch();
    }

    /**
     * @return view/dynamic/icons.html
     * Desc:  网络图标大全页
     */
    public function icons(){
        $this->assign('title','图标列表');
        return $this->fetch();
    }

    /**
     * @return view/dynamic/single.html
     * Desc:  博客详情页
     */
    public function single(){
        $this->assign('title','新闻详情');
        return $this->fetch();
    }

    /**
     * @return view/dynamic/typo.html
     * Desc:  打印，排版页面
     */
    public function typo(){
        $this->assign('title','页面排版');
        return $this->fetch();
    }
}