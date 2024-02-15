<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $typeId = Type::all()->pluck('id');


        $projects = array(
            array(
                "title" => "Vue-Boolzapp",
                "img_url" => "https://www.grazia.it/content/uploads/2023/09/canali-whatsapp.jpg",
                "date" => "2023-05-12",
                "description" => "Realizzare l'esercizio Vue Boolzapp usando Vue 3 come visto finora a lezione.",
                'type_id' => rand(1, count($typeId) - 1 )
            ),
            array(
                "title" => "vite-comics",
                "img_url" => "https://screenshots.codesandbox.io/m5cb4c/2.png",
                "date" => "2023-12-15",
                "description" => "Create un nuovo progetto utilizzando Vite e Vue 3 e definite i componenti necessari per strutturare il layout",
                'type_id' => rand(1, count($typeId) - 1 )
            ),
            array(
                "title" => "Vite Yu-Gi-Oh",
                "img_url" => "https://e1.pxfuel.com/desktop-wallpaper/9/667/desktop-wallpaper-yugioh-all-monster-gx-god-cards-overview-1444x1016-yu-gi-oh-cards.jpg",
                "date" => "2023-12-18",
                "description" => "Create un nuovo progetto utilizzando Vite e Vue 3 e definite i componenti.Al caricamento della pagina, effettuate una chiama ajax all'API.",
                'type_id' => rand(1, count($typeId) - 1 )
            ),
            array(
                "title" => "php-dischi-json",
                "img_url" => "https://images2.corriereobjects.it/methode_image/2016/03/24/Spettacoli/Foto%20Gallery/DORSI11F4BIS_7665053F1_4309_MGZOOM.jpg",
                "date" => "2024-01-16",
                "description" => "creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.",
                'type_id' => rand(1, count($typeId) - 1 )
            ),
        );

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->img_url = $project['img_url'];
            $newProject->date = $project['date'];
            $newProject->description = $project['description'];
            $newProject->type_id = $project['type_id'];
            $newProject->save();
        }
    }
}
