<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\FileableTrait;

class CertificateAttachment extends Model
{
    use HasFactory,FileableTrait;
    protected $fillable = ['certificate_id','image','note','exclude'];
    public function images()
    {
        return $this->morphMany(File::class, 'file', 'model_type', 'model_id', 'id')
            ->where('name_file', '!=', 'customer_signature');
    }
    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }

}
