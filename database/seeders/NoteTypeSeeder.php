<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NoteType;

class NoteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type' => 'Private'],
            ['type' => 'Not Private'],
            
        ];
        foreach ($data as $key => $name) {
            NoteType::create($name);
        }
    }
}
