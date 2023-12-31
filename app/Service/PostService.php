<?php


namespace App\Service;


use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();
            if(isset($data['tag_ids'])):
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            endif;
            if(isset($data['preview_image'])):
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            endif;
            if(isset($data['main_image'])):
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            endif;
            $post = Post::firstOrCreate($data);
            if(isset($data['tag_ids'])):
                $post->tags()->attach($tagIds);
            endif;
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $post)
    {
        try {
            Db::beginTransaction();
            if(isset($data['tag_ids'])):
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            endif;
            if(isset($data['preview_image'])):
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            endif;
            if(isset($data['main_image'])):
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            endif;
            $post->update($data);
            if(isset($data['tag_ids'])):
                $post->tags()->sync($tagIds);
            endif;
            DB::commit();
        }
        catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }
}
