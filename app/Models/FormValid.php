<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormValid extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','form_id','years'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function form(){
        return $this->belongsTo(Form::class,'form_id');
    }
}
