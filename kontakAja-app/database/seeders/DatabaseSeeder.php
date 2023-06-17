<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Anggoro',
            'username' => 'Ang',
            'email' => 'anggoro@gmail.com',
            'password' => bcrypt('anggoro')
        ]);

        // User::factory(1)->create();

        Category::create(["name" => "Guru"]);
        Category::create(["name" => "Keluarga"]);
        Category::create(["name" => "Teman"]);
        Category::create(["name" => "Tetangga"]);

        Contact::factory(40)->create();

        // Contact::create([
        //     'category_id' => '3',
        //     'user_id' => '1',
        //     'name' => 'Afrizal',
        //     'phone_number' => '081283612300',
        //     'email' => 'afrizal@gmail.com',
        //     'address' => 'Banjarnegara'
        // ]);
    }
}
