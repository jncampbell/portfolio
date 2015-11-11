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

        if (!$this->hasBeenStoredRecently()) {
            return $this->create(["ip" => $this->ip]);
        }
    }

    /**
     * Check if a visitor's IP address has been stored recently
     *
     * @return bool
     */
    private function hasBeenStoredRecently()
    {
        return $this->where('ip', $this->ip)
                    ->where('created_at', '>=', Carbon::now()->subHours(2))
                    ->first() ? true : false;
    }


    /**
     * Return the number of visitors within the last week
     *
     * @return mixed
     */
    public static function numberOfRecentVisitors()
    {
        return (new static)->select('*')
                           ->where('created_at', '>=', Carbon::now()->subDays(7))
                           ->count();
    }

}
