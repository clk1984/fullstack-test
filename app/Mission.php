<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mission extends Model
{
  use SoftDeletes;

     protected $table = 'missions';
    
     protected $dates = ['deleted_at'];
    
     protected $fillable = [
        'title', 'description', 'user_id',
    ];
  
  /*
  --------------------------------------------------------------------------
  SCOPES
  --------------------------------------------------------------------------
  */

  /**
   * Scope not default titles
   */
  public function scopeNotDefaultTitles($query){
      return $query->where('title','<>','Mission title');
        }

  /*
  -----------------------------------
  MODEL RELATIONS
  -----------------------------------
  */

  /**
   * Get user of this conversation
   */
  public function user() {
      return $this->belongsTo('App\User');
  }

  /*
  --------------------------------------------------------------------------
  GETS & SETS
  --------------------------------------------------------------------------
  */

  public function getDescription($value){
      if(is_null($value)){
        return "---" ;
      } else {
        return $value;
      }

  }
}
