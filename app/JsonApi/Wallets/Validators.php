<?php

namespace App\JsonApi\Wallets;

use CloudCreativity\LaravelJsonApi\Contracts\Validators\RelationshipsValidatorInterface;
use CloudCreativity\LaravelJsonApi\Validators\AbstractValidatorProvider;

class Validators extends AbstractValidatorProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'wallet';

    /**
     * Get the validation rules for the resource attributes.
     *
     * @param $record
     *      the record being updated, or null if it is a create request.
     * @return array
     */
    protected function attributeRules($record = null)
    {
        return [
            //
        ];
    }
    /**
     * @var array
     */
    protected $allowedIncludePaths = ['currency','money'];
    /**
     * @var array
     */
    protected $allowedSortParameters = [
        'user_id',
        'deleted_at',
     ];
    /**
     * Define the validation rules for the resource relationships.
     *
     * @param RelationshipsValidatorInterface $relationships
     * @param $record
     *      the record being updated, or null if it is a create request.
     * @return void
     */
    protected function relationshipRules(RelationshipsValidatorInterface $relationships, $record = null)
    {
        //
    }

}
