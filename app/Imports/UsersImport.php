<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Post;

class UsersImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
        {
            dd($rows);
            //$user = array();
            // foreach ($rows as $row) 
            // {
            //     // $post = new Post;
            //     // $post->name = $row[1];
            //     // $post->email = $row[2];
            //     // $post->save();
            //     Post::create([
            //         'title' => 'title',
            //         'content' => 'content',
            //         'name' => $row[1],
            //         'email' => $row[2],
            //     ]);            
            //    //array_push($user,['name' => $row[1], 'email' => $row[2]]);

            // }          
            //dd($user);
            //return $user;
            // Post::create([
            //     'title' => 'title',
            //     'content' => 'content',
            //     'name' => $rows[1][1],
            //     'email' => $rows[1][2],
            // ]); 

           // echo $rows[1][2];
           //dd(Post::all());
        //    $idx = 1;
        //    foreach ($rows as $row) {
        //     $post = new Post;
        //     $post->title = 'title-'.$idx;
        //     $post->content = 'content-1';
        //     $post->email = $row[2];
        //     $post->name = $row[1];            
        //     $post->save();
        //     $idx = $idx + 1;
        //    }

        // foreach ($rows as $row) {
        //      Post::create([
        //         'title' => 'title',
        //         'content' => 'content',
        //         'name' => $row[1],
        //         'email' => $row[2],
        //     ]);
        // }
            
        }
}
