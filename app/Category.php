<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
	protected $fillable = [
		"id",
		"category_name",
		"parent_category",
		"note",
		"attribs",
		"created_at",
		"updated_at"
	];
}
