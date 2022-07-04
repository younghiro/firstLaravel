<?php

namespace App\Models\Categoriry;


class Category extends Model
{
    $allCategories = Category::all(); //DBに値を入れていないからエラーになる

    return view ( 'index' ,['categories' => $allCategories ]);
}
