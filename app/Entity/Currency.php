<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use App\Entity\Money;

class Currency extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'currency';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * Get money with currency
    */
    public function money()
    {
        return $this->hasMany(Money::class);
    }
}
