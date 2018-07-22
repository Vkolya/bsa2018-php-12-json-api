<?php

namespace App\JsonApi\Wallets;

use App\Entity\Wallet;
use CloudCreativity\LaravelJsonApi\Contracts\Object\ResourceObjectInterface;
use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Eloquent\BelongsTo;
use CloudCreativity\LaravelJsonApi\Eloquent\HasMany;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class Adapter extends AbstractAdapter
{
    /**
     * @var array
     */
    protected $attributes = [];
    /**
     * @var array
     */
    protected $relationships = [
        'user',
        'currency',
        'money'
    ];
    /**
     * @var array
     */
    protected $defaultPagination = [
        'number' => 1,
    ];
    /**
     * Adapter constructor.
     *
     * @param StandardStrategy $paging
     */
    public function __construct(StandardStrategy $paging)
    {
        parent::__construct(new Wallet(), $paging);
    }
     
    /**
     * @return BelongsTo
     */
    protected function user()
    {
        return $this->belongsTo();
    }
 
    /**
     * @return BelongsTo
     */
    protected function currency()
    {
        return $this->hasMany();
    }
    /**
     * @return BelongsTo
     */
    protected function money()
    {
        return $this->hasMany();
    }
    
    /**
     * @inheritdoc
     */
    protected function filter($query, Collection $filters)
    {
        if ($filters->has('deleted_at')) {
            $query->where('wallet.deleted_at',$filters->get('deleted_at') == '0' ? null : $filters->get('deleted_at'));
        }
    }
    
}