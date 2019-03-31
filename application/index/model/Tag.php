<?php 
namespace app\index\model;
use think\Model;

class Tag extends Model
{
	//自动写入时间戳字段，类型为datetime
	protected $autoWriteTimestamp = 'datetime';
	//关闭自动写入update_time字段
	protected $updateTime = false;
	public function Category()
	{
		return $this->belongsTo("Category");
	}
	//关联Article模型
	public function article()
	{
	    return $this->hasMany('Article');
	}
	//关联Share模型
	public function share()
	{
	    return $this->hasMany('Share');
	}
}

?>