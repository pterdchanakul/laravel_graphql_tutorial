<?php

namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use App\Wine;

class WinesQuery extends Query
{
    protected $attributes = [
        'name' => 'wines',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Wine'));
    }

    public function resolve($root, $args)
    {
        return Wine::all();
    }
}
