<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ElectricBoard;

class ElectricBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name' => 'ELECSA',
             'image' => 'ELESSA.jpg',
        ],
            ['name' => 'STROMA',
            'image' => 'Stroma.png',
        ],
            ['name' => 'IET(Instituion of Engineering and Technology',
               'image' => 'Stroma.png'],
            ['name' => 'JIB(Joint Industry Board)',
             'image' => 'Stroma.png'
        ],
            ['name' => 'SELECT(Scotland)',
            'image' => 'Select.png',
        ],
            ['name' => 'NAPIT',
            'image' => 'Napit.png',
        ],
            ['name' => 'NICEIC',
              'image' => 'niceic-logo.png'],
           
        ];
        foreach ($data as $key => $name) {
            ElectricBoard::create($name);
        }
    }
}
