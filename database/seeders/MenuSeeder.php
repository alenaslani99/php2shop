<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $names = ['Home', 'Shop', 'Contact', 'Login', 'Register'];
    private $routes = ['home', 'shop', 'contact', 'login', 'register'];
    public function run(): void
    {
        for ($i = 0; $i < count($this->names); $i++){
            $menu = new Menu;
            $menu->name = $this->names[$i];
            $menu->route = $this->routes[$i];
            $menu->order = $i;
            $menu->save();
        }
    }
}
