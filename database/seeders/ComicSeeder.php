<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comic = new Comic([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => str_replace('$', '', $comic['price']),
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type'],
                'artists' => json_encode($comic['artists']),
                'writers' => json_encode($comic['writers']),
            ]);

            $new_comic->save();
        }
    }
}
