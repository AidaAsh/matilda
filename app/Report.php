<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'idParalax', 'year', 'month','worked_h_month','total_salary','given',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  // protected $hidden = [
  //     'password', 'remember_token',
  // ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  // protected $casts = [
  //     'email_verified_at' => 'datetime',
  // ];
}
