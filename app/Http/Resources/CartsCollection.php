<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CartsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($post){
                $relations = $post->getRelations();
                return [
                    'id' => $post->id,
                    'user' => $post->user_id,
                    'shop' => $post->shop_id,
                    'created_at' => $post->created_at,
                    'updated_at' => $post->updated_at,

                    'includes' => $relations
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
