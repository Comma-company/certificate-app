<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AttachmentType;

class AttachmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type' => 'form_image'],
            ['type' => 'form_note'],
            ['type' => 'cert_note'],
            
        ];
        foreach ($data as $key => $name) {
            AttachmentType::create($name);
        }
        
    }
}
