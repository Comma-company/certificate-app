<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateImage extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'type', 'type_id'];

public function attachment()
    {
        return $this->hasOne(CertificateAttachment::class, 'image_id');
    }
}