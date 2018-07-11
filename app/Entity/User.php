<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use App\Entity\Wallet;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';
    
    public $timestamps = false;
    /**
     * Get user's wallet
     */
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

}
