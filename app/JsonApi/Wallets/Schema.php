<?php
namespace App\JsonApi\Wallets;

use App\Entity\Wallet;
use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{
    /**
     * @var string
     */
    protected $resourceType = 'wallets';
   
    /**
     * @var array
     */
    protected $relationships = [
        'user'
    ];
    /**
     * @param Wallet $resource
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getKey();
    }
    /**
     * @param Wallet $resource
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
             'user_id' => $resource->user_id,
        ];
    }
    /**
     * @param Wallet $resource
     * @param bool $isPrimary
     * @param array $includedRelationships
     * @return array
     */
    public function getRelationships($resource, $isPrimary, array $includedRelationships)
    {
        return [
            'user' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['user']),
                self::DATA => function () use ($resource) {
                    return $resource->user;
                },
            ],
          
        ];
    }
}