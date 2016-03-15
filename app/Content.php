<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'contents';
	protected $fillable = [
		"id",
		"title",
		"alias",
		"image",
		"thumbnail",
		"content",
		"quote",
		"category_id",
		"author_id",
		"public",
		"featured",
		"sort",
		"attribs",
		"send",
		"created_at",
		"updated_at"
	];
}
