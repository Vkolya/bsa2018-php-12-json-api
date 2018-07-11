<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use App\Entity\User;
use App\Entity\Money;

class Wallet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wallet';
    public $timestamps = false;
    /**
     * Get the user that owns the wallet.
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get wallet's money
     */
    public function money()
    {
        return $this->hasMany(Money::class);
    }
}
