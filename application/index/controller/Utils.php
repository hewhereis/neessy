<?php
/**
 * Created by PhpStorm.
 * User: Neessy
 * Date: 2018/11/13
 * Time: 10:14
 */

namespace app\index\controller;


use app\index\model\Message;
use think\Controller;
use think\facade\Request;
use think\Model;

class Utils extends Controller
{
    // 是否批量验证
    //protected $batchValidate = true;
    // 验证失败是否抛出异常
    //protected $failException = true;

    /**
     * @return baiduMap utilsClass
     */
    public function baiduMap(){
        return $this->fetch();
    }

    /**
     * send message
     */
    public function sendMsg(){
        if(!Request::isPost())
            $this->error('Sorry! you can\'t access the page directly');
        $post = Request::post();
        // validate post data is rightful
        $result = $this->validate($post,'app\index\validate\Message');
        if($result !== true){
            $this->error($result);
        }
        $post['ip'] = Request::ip();
        // write post data to db table
        $msg = new Message();
        if( !$msg->save($post) ){
            $this->error('save data to message failure');
        }
        $this->success('save data to message successful');
        /**
         * set auto complete for create method invalid
         */
        $msg = Message::create($post,['name','email','ip','message']);
        if(!$msg){
            $this->error('create data to message table failure');
        }
        $this->success('Insert data to message table successful');

    }

}