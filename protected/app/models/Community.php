<?php
class Community extends BaseModel  {
	
	protected $table = 'community';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT community.* FROM community  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE community.id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
