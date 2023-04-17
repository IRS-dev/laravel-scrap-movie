<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin123',
            'email' => 'admin123@gmail.com',
            'password'=> Hash::make('admin123'),
            'role' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin321',
            'email' => 'admin321@gmail.com',
            'password'=> Hash::make('admin321'),
            'role' => 0
        ]);


        \App\Models\News::create([
            'title' => 'Movie News Here!!',
            'body' => Str::random(255)
        ]);
        \App\Models\News::create([
            'title' => 'Breaking News!! marvel Studio..',
            'body' => Str::random(255)
        ]);

        \App\Models\Movie::create([
            'title' => 'avenger',
            'sinopsis' => Str::random(100),
        ]);
        \App\Models\Movie::create([
            'title' => 'Harry Potter',
            'sinopsis' => Str::random(100),
        ]);
        \App\Models\Movie::create([
            'title' => 'Upin dan Ipin',
            'sinopsis' => Str::random(100),
        ]);
        \App\Models\Movie::create([
            'title' => 'Breaking Bad',
            'sinopsis' => Str::random(100),
        ]);
        \App\Models\Movie::create([
            'title' => 'Toy Story',
            'sinopsis' => Str::random(100),
        ]);
    }
}