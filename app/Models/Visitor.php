<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    private static $visitor;

    public static function saveInfo($request){
        self::$visitor = new Visitor();
        self::$visitor->name = $request->name;
        self::$visitor->email = $request->email;
        self::$visitor->phone = $request->phone;
        self::$visitor->password = bcrypt($request->password);
        self::$visitor->save();
    }


}
