<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {


    protected $fillable = ['image'];

    public function place(){

        return $this->belongsTo('App\Place');
    }
}
