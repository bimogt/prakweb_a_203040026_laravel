<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home',[
        "title"=>"Home"
    ]);
});


Route::get('/about', function () {
    return view('about',[
    "title"=>"About",
    "name"=>"Bimo Resnumurti Zuhri",
    "email"=>"bimogt@gmail.com",
    "image"=>"bimo.jpg"
    ]
);
});

 

Route::get('/posts', function () {
    return view('posts',[
        "title"=>"posts",
        "posts"=> Post::all()
    ]);
});

//halaman  
Route::get('posts/{slug}',function($slug){
    $blog_posts =[
        [
            "title"=> "Judul Post Pertama",
            "slug"=>"Judul Post Pertama",
            "author"=> "Bimo Resnumurti Zuhri",
            "Body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis ullam quaerat iure harum officia mollitia porro itaque illum esse ut laboriosam ipsa in suscipit, voluptate inventore officiis blanditiis vero laborum obcaecati sed doloribus. Consectetur impedit facere, nobis quos molestiae sint. Ab nesciunt atque dolor, alias aut laboriosam earum ipsum libero, veniam eligendi sint illo sapiente nobis voluptatibus praesentium cupiditate autem mollitia in quae dolores exercitationem. Nemo unde provident tempore expedita, et eaque quo recusandae voluptatum placeat pariatur tempora aliquam possimus modi, minima, quibusdam dolorum eius nostrum odit amet est sapiente. Veniam libero necessitatibus hic dolores recusandae. Soluta reprehenderit perferendis veniam?"
        ]
        ];foreach ($blog_posts as $post) {
            if ($post["slug"] === $slug) {
                $new_post = $post;
            }
        }


    return view('post',[
        "title" => "Single Post",
        "post" =>$new_post
    ]);
});
