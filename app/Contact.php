<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table    = 'contacts';
    protected $fillable = ['email'];

    public function messages()
    {
        return $this->hasMany('App\Messages');
    }

}
