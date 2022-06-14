<?php

use App\Models\Locations;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'name' => 'Hotel Mediterraneo',
                'country' => 'Italy',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempore qui ullam deleniti voluptate excepturi harum saepe, tenetur maxime.',
                'thumbnail' => 'https://picsum.photos/300',
                'address' => 'Via Leonardo da Vinci 11',
                'is_available' => true,
                'phone_number' => '+39 06 762 6113',
            ],
            [
                'name' => 'Museo della storia navale',
                'country' => 'Italy',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempore qui ullam deleniti voluptate excepturi harum saepe, tenetur maxime.',
                'thumbnail' => 'https://picsum.photos/300',
                'address' => 'Via Alessandro Manzoni 7',
                'is_available' => true,
                'phone_number' => '+39 06 080 0034',
            ],
            [
                'name' => 'Acropoli di Agrigento',
                'country' => 'Italy',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempore qui ullam deleniti voluptate excepturi harum saepe, tenetur maxime.',
                'thumbnail' => 'https://picsum.photos/300',
                'address' => 'Via Gorizia 42',
                'is_available' => true,
                'phone_number' => '+39 06 750 7331',
            ],
            [
                'name' => 'Anfiteatro Greco di Siracusa',
                'country' => 'Italy',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempore qui ullam deleniti voluptate excepturi harum saepe, tenetur maxime.',
                'thumbnail' => 'https://picsum.photos/300',
                'address' => 'Viale Marco Polo 37',
                'is_available' => true,
                'phone_number' => '+39 06 528 8901',
            ],
            [
                'name' => 'Museo di Storia Naturale di Pisa',
                'country' => 'Italy',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempore qui ullam deleniti voluptate excepturi harum saepe, tenetur maxime.',
                'thumbnail' => 'https://picsum.photos/300',
                'address' => 'Via Garibaldi 2',
                'is_available' => true,
                'phone_number' => '+39 06 328 3342',
            ],
            [
                'name' => 'Hotel Quadrifoglio',
                'country' => 'Italy',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempore qui ullam deleniti voluptate excepturi harum saepe, tenetur maxime.',
                'thumbnail' => 'https://picsum.photos/300',
                'address' => 'Via Milano 27',
                'is_available' => true,
                'phone_number' => '+39 06 508 7748',
            ]
        ];

        foreach($locations as $location){
            $_location = new Location();
            $_location->name = $location['name'];
            $_location->country = $location['country'];
            $_location->price = $location['price'];
            $_location->description = $location['description'];
            $_location->thumbnail = $location['thumbnail'];
            $_location->address = $location['address'];
            $_location->is_available = $location['is_available'];
            $_location->phone_number = $location['phone_number'];
        }
    }
}
