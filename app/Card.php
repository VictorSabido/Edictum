<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;

    protected $softDelete = true;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','category_id', 'date', 'status', 'order', 'slug', 'media', 'title', 'body_card'];

    public function category()
    {
        return $this->hasOne('App\Category', 'id');
    }

}
