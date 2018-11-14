<?php
/**
 * Created by PhpStorm.
 * User: Neessy
 * Date: 2018/11/14
 * Time: 17:03
 */

namespace app\index\model;
use think\Model;

class Message extends Model
{
    protected $pk = 'msg_id';
    protected $insert = ['delete_time'=>0];

}