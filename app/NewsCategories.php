<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class NewsCategories extends Model
{
    protected $guarded = [];
    protected $table = "news_categories";
}