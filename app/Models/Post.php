<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title','description','user_id'
    ];
    //Ana 3araft function de 3alashan amsek user object,ya post hatly el user which U belongs to
    // public function myUserRelation()
    // {
    //     return $this->belongsTo(User::class,'user_id');
    // }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
