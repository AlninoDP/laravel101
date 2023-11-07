<?php

namespace App\Models;

 

class Post  
{
      private static $blog_post = [
        [
            "judulPost" => 'Post 1',
            "slug" => 'post1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet malesuada ligula. 
            Mauris malesuada ante non fermentum tempus. Morbi eleifend pretium mi, id placerat nisi scelerisque a. 
            Vivamus vestibulum eu quam sit amet ullamcorper. In dolor magna, laoreet sit amet ullamcorper in, egestas id nibh. 
            Etiam sed nunc dui. Integer et lacinia dolor, eget viverra ex. In hac habitasse platea dictumst.'
        ],
        [
            "judulPost" => 'Post 4',
            "slug" => 'post2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet malesuada ligula. 
            Mauris malesuada ante non fermentum tempus. Morbi eleifend pretium mi, id placerat nisi scelerisque a. 
            Vivamus vestibulum eu quam sit amet ullamcorper. In dolor magna, laoreet sit amet ullamcorper in, egestas id nibh. 
            Etiam sed nunc dui. Integer et lacinia dolor, eget viverra ex. In hac habitasse platea dictumst.'
        ],
        [
            "judulPost" => 'Post 3',
            "slug" => 'post3',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet malesuada ligula. 
            Mauris malesuada ante non fermentum tempus. Morbi eleifend pretium mi, id placerat nisi scelerisque a. 
            Vivamus vestibulum eu quam sit amet ullamcorper. In dolor magna, laoreet sit amet ullamcorper in, egestas id nibh. 
            Etiam sed nunc dui. Integer et lacinia dolor, eget viverra ex. In hac habitasse platea dictumst.'
        ],
      ];

    public static function getAllPost() {
        return self::$blog_post;
    }  
}
