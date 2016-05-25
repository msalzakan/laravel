<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
	
	public function student(){
		return $this->BelongTo('App\Student');
	}
}
