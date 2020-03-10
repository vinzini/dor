<?php

namespace App\Custom;

trait Paginatable{
	private $pageSizeLimit = 10;

	public function getPerPage(){
		$pageSize = request('page_size',$this->perPage);
		return min($pageSize,$this->pageSizeLimit);
	} 
}