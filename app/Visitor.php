<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Visitor extends Model
{
    protected $table = "ip_addresses";
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


    public function hasBeenStoredRecently()
    {
        return $this->where('ip', $this->ip)
                    ->where('created_at', '>=', Carbon::now()->subHours(2))
                    ->first() ? true : false;
    }


    //return num of unique visitors in last week
    public static function numberOfRecentVisitors()
    {
        $visitor = new Visitor;
        return $visitor->select('*')->where('created_at', '>=', Carbon::now()->subDays(7))->count();
    }

}
