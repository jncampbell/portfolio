<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table    = 'messages';

    /**
     * The fillable attributes of the model
     *
     * @var array
     */
    protected $fillable = ['contact_id', 'subject', 'body'];

    /**
     * The attributes that will be returned as a date instance
     *
     * @var array
     */
    protected $dates    = ['created_at'];

    /**
     * The contact that as created the message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

}
