<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateUserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run(): void
     {
         $users = User::where('groups_id', 19)->get();
     
         foreach ($users as $user) {
             $group_id = Group::inRandomOrder()->first()->id;
     
             $user->update(['groups_id' => $group_id]);
         }
     }
     
}
