<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract 
{

    use Authenticatable, CanResetPassword;
	protected $table = 'usuario';
	protected $filable = ['user','pass'];
	protected $hidden = ['pass'];

	public function getAuthPassword() {
    return $this->pass;
	}

}
