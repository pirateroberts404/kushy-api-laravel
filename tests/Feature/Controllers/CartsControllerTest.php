<?php

namespace Tests\Feature\Controllers;

use Tests\CrudTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartsControllerTest extends CrudTest
{
    /**
     * The model to use when creating dummy data
     *
     * @var class
     */
    protected $model = \KushyApi\Carts::class;

    /**
     * The endpoint to query in the API
     * e.g = /api/v1/<endpoint>
     *
     * @var string
     */
    protected $endpoint = 'carts';

    /**
     * Any additional "states" to add to factory
     *
     * @var string
     */
    protected $states = '';

    /**
     * Extra data to pass to POST endpoint 
     * aka the (store() method)
     * 
     * Must be array (ends up merged with another)
     *
     * @var array
     */
    protected $store = [
    ]; 

    protected $collectionStructure = [
        'data' => [
            [
                'id',
                'user',
                'shop',
                'created_at',
                'updated_at',
                'includes',
            ],
        ],
        'links' => [
            'self'
        ]
    ];

    protected $resourceStructure = [
        'data' => [
            'id',
            'user',
            'shop',
            'created_at',
            'updated_at',

            'includes' => [
                'user',
                'shop',
            ]
        ],
    ];
}