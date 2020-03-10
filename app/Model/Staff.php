<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Custom\Paginatable;

class Staff extends Model
{
	use Paginatable;
    protected $table = 'staff';
}
