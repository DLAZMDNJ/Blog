<?php 

namespace App\Repositories;
use App\Models\friends;
use Illuminate\Http\Request;
use DB;

class SunRepository extends BaseRepository
{
	protected $model;
	public function __construct()
	{
		
	}
	public function mn(){
		return $this->model()->mn();
	}
	public function model(){
		$model = $this->model;
	
		return $model;
	}
	public function setModel($model){
		$this->model = $model;
	}
	public function all()
	{
		$list = $this->model()->get();
		return $list;
	}
	public function find($id){
		$model = $this->model->find($id);
		if($model){
			$model = $this->format_right_one($model);
		}
	
	
		return $model;
	}
	public function detail($where){
		$model = $this->model;
		foreach($where as $k=>$v){
			$model = $model->where($k,$v);
		}
		return $model->first();
	}
	public function index($data, $extra='')
	{
		
	}
	public function add()
	{
		
	}
	public function doAdd($data,$extra='')
	{
		
	}
	public function edit($id,$extra='')
	{
		
	}
	public function doEdit($data,$extra='')
	{
		
	}
	public function delete($id,$extra='')
	{
		
	}
}
