<?php namespace Emotions;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = ['title', 'full_text', 'type'];

}
