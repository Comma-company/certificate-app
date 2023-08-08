<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CertificateImage extends Model
{
    use HasFactory;
    protected $fillable = ['image'];
    protected $appends = ['file_url'];
    public function attachment()
    {
        return $this->hasOne(CertificateAttachment::class, 'image_id');
    }

    public function getFileUrlAttribute(){
        $path = $this->image;
        return $imageUrl = Storage::disk('public')->url($path);
    }
}
