<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\FileableTrait;

class CertificateAttachment extends Model
{
    use HasFactory,FileableTrait;
    protected $guarded = [];
    public function images()
    {
        return $this->morphMany(File::class, 'file', 'model_type', 'model_id', 'id')
            ->where('name_file', '!=', 'customer_signature');
    }
    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }

    public function image()
    {
        return $this->belongsTo(CertificateImage::class, 'image_id');
    }

}
