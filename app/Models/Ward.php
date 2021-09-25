<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\Group;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
        'xaid',
        'name',
        'type',
        'maqh'
    ];
    protected $primaryKey = 'xaid';
    public function group(){
        return $this->hasMany(Group::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
