<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    private static $comment;
    public static function saveComment($request){
       self::$comment = new Comment();
       self::$comment->blog_id = $request->blog_id;
       self::$comment->visitor_id = $request->visitor_id;
       self::$comment->comment = $request->comment;
       self::$comment->save();
    }

    public function visitor(){
        return $this->belongsTo(Visitor::class);
    }
}
