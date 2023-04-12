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

        \App\Models\Movie::create([
            'title' => 'avenger',
            'rating' => 9,
            'sinopsis' => Str::random(100),
            'genre' =>  Str::random(5),
            'actor' =>  Str::random(5),
            'poster' => 'posters/X1XjODPECzy0yDDLl8vItgZI8WUomGCGiSSbemKl.jpg',
        ]);
        \App\Models\Movie::create([
            'title' => 'Harry Potter',
            'rating' => 8,
            'sinopsis' => Str::random(100),
            'genre' =>  Str::random(5),
            'actor' =>  Str::random(5),
            'poster' => 'posters/X1XjODPECzy0yDDLl8vItgZI8WUomGCGiSSbemKl.jpg',
        ]);
        \App\Models\Movie::create([
            'title' => 'Upin dan Ipin',
            'rating' => 8,
            'sinopsis' => Str::random(100),
            'genre' =>  Str::random(5),
            'actor' =>  Str::random(5),
            'poster' => 'posters/X1XjODPECzy0yDDLl8vItgZI8WUomGCGiSSbemKl.jpg',
        ]);
        \App\Models\Movie::create([
            'title' => 'Breaking Bad',
            'rating' => 8,
            'sinopsis' => Str::random(100),
            'genre' =>  Str::random(5),
            'actor' =>  Str::random(5),
            'poster' => 'posters/X1XjODPECzy0yDDLl8vItgZI8WUomGCGiSSbemKl.jpg',
        ]);
        \App\Models\Movie::create([
            'title' => 'Toy Story',
            'rating' => 8,
            'sinopsis' => Str::random(100),
            'genre' =>  Str::random(5),
            'actor' =>  Str::random(5),
            'poster' => 'posters/X1XjODPECzy0yDDLl8vItgZI8WUomGCGiSSbemKl.jpg',
        ]);
    }
}