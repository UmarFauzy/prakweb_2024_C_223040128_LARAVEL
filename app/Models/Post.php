<?php  

namespace App\Models;
use Illuminate\Support\Arr;

class post 
{
    public static function all ()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'tittle' => 'Judul Artikel 1',
                'author' => 'Umar Fauzy',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus voluptate, 
                            cupiditate nemo accusantium ipsam corporis tempora qui voluptates veritatis fuga deserunt 
                            repellendus adipisci autem in commodi, temporibus quia, dolorem ea.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'tittle' => 'Judul Artikel 2',
                'author' => 'Umar Fauzy',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Repudiandae quas nostrum aut facere minima minus nemo soluta reiciendis, 
                            quis ducimus animi nesciunt sint ad aliquid alias similique corrupti accusamus incidunt.'
            ]
            ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug ;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }

}