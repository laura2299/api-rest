<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubjet;

class User extends Authenticatable implements JWTSubjet
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table="usuarios";
    
    protected $fillable = [
        
        'id',
        'ci',
        'nombre',
        'ape_paterno',
        'ape_materno',
        'fechaRegistro',
        'tipo',
        'password',
        'email',
        'email_verified_at',
        'estado'
    ];
    public $timestamps=false;

    protected $hidden =[
        'password','remember_token',
    ];
     public function getJWTIdentifier(){
        return $this->getkey();
     }
    public function getJWTCustomClaims(){
        return[];
    }
}
