<?php

namespace app\admin\model;

use think\Model;

class Division extends Model
{
    // 表名
    protected $name = 'division';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [

    ];
    

    







    public function company()
    {
        return $this->belongsTo('Company', 'cid', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
