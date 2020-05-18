<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tb_news';
	protected $primaryKey = 'id';

	protected $fillable = [
		'title',
		'reading',
		'sub_image',
		'sub_news',
		'news',
	];
}
