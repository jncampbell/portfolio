<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Visitor extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = "ip_addresses";

    /**
     * The fillable attributes of the model
     *
     * @var array
     */
    protected $fillable = ["ip"];

    /**
     * Store an IP Address
     *
     * @return static
     * @throws \Exception
     */
    public function storeIPAddress()
    {
        if (!isset($this->ip)) {
            throw new \Exception('IP Address is not set');
        }

        return $this->create(["ip" => $this->ip]);
    }
    
    /**
     * Return the number of visitors within the last week
     *
     * @return mixed
     */
    public static function countRecent()
    {
        return (new static)->select('*')
                           ->where('created_at', '>=', Carbon::now()->subDays(7))
                           ->count();
    }

}
