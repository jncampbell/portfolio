<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table    = 'contacts';

    /**
     * The fillable attributes of the model
     *
     * @var array
     */
    protected $fillable = ['email'];

    /**
     * The messages that belong to the contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Messages');
    }

}
