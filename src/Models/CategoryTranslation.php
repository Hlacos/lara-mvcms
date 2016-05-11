<?php

namespace Hlacos\LaraMvcms\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug', 'title', 'description'];
}
