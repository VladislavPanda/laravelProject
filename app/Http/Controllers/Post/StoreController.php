<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);
        
        $this->service

        $post = Post::create($data);
        /*foreach($tags as $tag){
            PostTag::firstOrCreate([
                'post_id' => $post->id,
                'tag_id' => $tag
            ]);
        }*/

        $post->tags()->attach($tags);

        return redirect()->route('posts.index');
    }
}
