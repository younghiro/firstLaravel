<?php

namespace App\Models\Categoriry;


class Category extends Model
{
    $allCategories = Category::all(); //DBに値を入れていないからエラーになる
    $posts = Post::latest()->get();

    return view ( 'index' , compact( 'categories', 'posts'));
}
