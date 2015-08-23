<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table    = 'messages';
    protected $fillable = ['contact_id', 'subject', 'body'];
    protected $dates    = ['created_at'];

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

}
