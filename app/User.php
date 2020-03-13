<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function productInCart() {
        return $this->belongsTo('App\ProductoInCart');
      }

    public function productos(){
        return $this->belongsToMany('App\Product','products_in_cart','user_id','product_id')->withPivot('count');
    }

    public function cartTotal(){
        $productos = $this->productos()->get();
        $total = 0;
        foreach ($productos as $producto) {
            $total += ($producto->price * $producto->pivot->count);
        }
        return $total;
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
