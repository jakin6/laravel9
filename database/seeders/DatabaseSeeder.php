<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // Listing::create(
        //     [
        //         'title'=>'Laravel Senior Developer',
        //         'tags'=>'Laravel,javascript',
        //         'company'=>'Acme Corp',
        //         'location'=>'Boston ,MA',
        //         'email'=>'email1@email.com',
        //         'website'=>'https://ww.acme.com',
        //         'description'=>'Lorem ipsum dolor sit, amet consectetur 
        //         adipisicing elit. Vitae alias quaerat
        //          rerum dicta numquam at eius eos saepe doloribus molestias?'
        //     ]
        //     );

        // Listing::create([
        //     'title'=>'Laravel Fullstack Engineer',
        //     'tags'=>'Laravel,backend api',
        //     'company'=>'Stark Industries',
        //     'location'=>'New york, NY',
        //     'email'=>'email2@email.com',
        //     'website'=>'https://ww.starkindusries.com',
        //     'description'=>'Lorem ipsum dolor sit, amet consectetur 
        //     adipisicing elit. Vitae alias quaerat
        //     rerum dicta numquam at eius eos saepe doloribus molestias?'
        // ]);
    }
}
