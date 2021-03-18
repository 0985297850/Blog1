<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class NewsTags extends Model
{
    protected $guarded = [];
    protected $table = "news_tags";
}