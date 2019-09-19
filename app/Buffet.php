<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buffet extends Model
{
    protected $table = 'buffet';
    protected $primaryKey = 'id';
    protected $fillable = ['namebuffet', 'position', 'price', 'created_at' , 'updated_at'];
    public static function getAll()
    {
        return self::get();
    }
    public static function getItem($id)
    {
        return self::findOrFail($id);
    }
    public static function search($keyword)
    {
        return self::where('namebuffet', 'LIKE', "%$keyword%")
            ->orWhere('position', 'LIKE', "%$keyword%")
            ->orWhere('price', 'LIKE', "%$keyword%")
            ->orWhere('created_at', 'LIKE', "%$keyword%")
            ->orWhere('updated_at', 'LIKE', "%$keyword%")
            ->get();
    }
    public static function storeItem($newItem)
    {
        return self::create($newItem);  
    }
    public static function updateItem($id,$item)
    {
        self::findOrFail($id)->update($item);
    }
    public static function destroyItem($id)
    {
        self::findOrFail($id)->delete();
    }
}
