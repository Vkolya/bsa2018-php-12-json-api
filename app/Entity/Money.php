<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entity\Wallet;
use App\Entity\Currency;

class Money extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * Get wallet
    */
    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
    /**
     * Get the money currency
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
