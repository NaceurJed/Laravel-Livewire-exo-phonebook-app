<?php
namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name):array // pour que ça nou retourne un tableau on doit utiliser all() à la fin
    {
        // sleep(3); ça permet de faire une pause de 3 seconde avant de commence à chercher
        return self::searchBy('name', $name);
    }

    // Recherche par ville
    public static function searchByCity(string $city):array // pour que ça nou retourne un tableau on doit utiliser all() à la fin
    {
        return self::searchBy('city', $city);
    }

    //on créer une méthode pour factoriser les méthode au dessusBlade::component('package-name', PackageNameComponent::class);
    public static function searchBy(string $key, string $value): array
    {
        return collect(self::contacts())
            ->filter(fn($contact) => Str::contains(strtolower($contact[$key]), strtolower($value)))
            ->all();//Fonction de collback contains(où on doit chercher, ce qu'on doit chercher)
            // la méthode collect nous retourne une collection
    }


    public static function contacts():array
    {
        return 
        [
            [
                'name' => 'Naceur Jeddi',
                'email' => 'naceur@gmail.com',
                'phone' => '0651849563',
                'city' => 'Nice 06'
            ],
            [
                'name' => 'Myriam Jeddi',
                'email' => 'Myriam@gmail.com',
                'phone' => '0651958474',
                'city' => 'Nice 06'
            ],
            [
                'name' => 'Aymen Jeddi',
                'email' => 'Aymen@gmail.com',
                'phone' => '0632519584',
                'city' => 'Nice 06'
            ],
            [
                'name' => 'Samir Dhib',
                'email' => 'Samir@gmail.com',
                'phone' => '0684625184',
                'city' => 'Nice 06'
            ],
            [
                'name' => 'Hamdi Dhib',
                'email' => 'Hamdi@gmail.com',
                'phone' => '0796519584',
                'city' => 'Nice 06'
            ],
            [
                'name' => 'Wajdi Chaarana',
                'email' => 'Wajdi@gmail.com',
                'phone' => '25849663',
                'city' => 'Msaken 4070'
            ],
            [
                'name' => 'Ali Hamida',
                'email' => 'Ali@gmail.com',
                'phone' => '0663524174',
                'city' => 'Paris 75'
            ],
            [
                'name' => 'Cheker Brahem',
                'email' => 'Cheker@gmail.com',
                'phone' => '0698326554',
                'city' => 'Paris 93'
            ],
            [
                'name' => 'Aymen Baya',
                'email' => 'Baya@gmail.com',
                'phone' => '0796634174',
                'city' => 'MArseille 13'
            ]
            

            ];
    }
}