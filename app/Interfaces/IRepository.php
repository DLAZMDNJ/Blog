<?php 
namespace  APP\Interfaces;

/**
 * 定义Repository接口
 *
 * @author <孙涛>
 */
interface IRepository
{	
	#********
	#* 与资源 REST 相关的接口函数 START
	#********
	
	/**
	 * 资源列表
	 *
	 * @param  array $data 必须传入与模型查询相关的数据
	 * @param  string|array $extra 可选额外传入的参数
	 * @param  string $size 分页大小（存在默认值）
	 * @return Illuminate\Support\Collection
	 */
	public function index($data,$extra)
	{
		
	}
	public function add()
	{
		
	}
	public function doAdd($data,$extra)
	{
		
	}
	public function edit($id,$extra)
	{
		
	}
	public function doEdit($data,$extra)
	{
		
	}
	public function delete($id,$extra)
	{
		
	}
}