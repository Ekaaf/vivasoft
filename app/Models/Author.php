<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Author extends Model
{	
	protected $primaryKey = 'id';
    protected $table = 'authors';
    public $user_id;
    public $name;
    public $is_professional;
    public $created_at;
    public $updated_at;
}
