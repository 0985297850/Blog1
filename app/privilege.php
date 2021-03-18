<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class privilege extends Model
{
    protected $guarded = [];
    protected $table = "privilege";
}