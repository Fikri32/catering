<?php

use Illuminate\Database\Seeder;
use App\Departments;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $finishing = Departments::create([
            'nama' => 'Finishing',
          
        ]);

        $hrd = Departments::create([
            'nama' => 'HRD',
          
        ]);
    }
}
