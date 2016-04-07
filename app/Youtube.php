<?php
/**
 * Created by PhpStorm.
 * User: yaron
 * Date: 27-1-16
 * Time: 15:59
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'youtube_id', 'used'
  ];
}
