<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hrd = User::create([
            'name' => 'Staff HRD',
            'id_department' => 2,
            'password' => bcrypt('admin123')
        ]);

        $hrd->assignRole('Staff');

        $dept_head = User::create([
            'name' => 'Dept Head Finishing',
            'id_department' => 1,
            'password' => bcrypt('admin123')
        ]);

        $dept_head->assignRole('Dept Head');

        $spv = User::create([
            'name' => 'Supervisior Finishing',
            'id_department' => 1,
            'password' => bcrypt('admin123')
        ]);

        $spv->assignRole('Supervisior');

        foreach(Spatie\Permission\Models\Role::whereNotIn('name', ['Dept Head', 'Supervisior','Staff'])->get() as $role) {
            $users = factory(User::class, 5)->create();
            foreach($users as $user){
               $user->assignRole($role);
            }
         }
        
    }

}
