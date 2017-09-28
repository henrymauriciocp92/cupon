<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
   /* protected $fillable = [
        'identification',
        'secuential',
        'box',
        'folder',
        'file_name'
    ];*/

    public function scopeSearch($query, $value){
        return $query
            ->where (
                function ($query) use ($value) {
                    $query->orwhere('identification', 'like', '%' . $value . '%');
                    $query->orwhere('box', $value);
                    $query->orwhere('folder', 'like', '%' . $value . '%');
                }
            );
    }
}
