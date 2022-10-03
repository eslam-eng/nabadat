<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Country extends Model
{
    use HasFactory, NodeTrait;

    protected $fillable = [
        'slug', 'iso_code_3', 'iso_code_2', 'currency_id', 'is_active', 'lft' ,'rgt','title','created_by','_lft','_lft','parent_id'
    ];

    protected $table = 'locations';
    public $timestamps = false;

}
