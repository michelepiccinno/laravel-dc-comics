<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_comic = config("comics");

        foreach ($array_comic as $comic_item) {
            $nuovo_comic = new Comic();
            $nuovo_comic->title = $comic_item["title"];
            $nuovo_comic->description = $comic_item["description"];
            $nuovo_comic->thumb = $comic_item["thumb"];
            $nuovo_comic->price = $comic_item["price"];
            $nuovo_comic->series = $comic_item["series"];
            $nuovo_comic->sale_date = $comic_item["sale_date"];
            $nuovo_comic->type = $comic_item["type"];
            $nuovo_comic->save();
        }
    }
}
