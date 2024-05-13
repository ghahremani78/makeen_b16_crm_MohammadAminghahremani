<?php

namespace Database\Seeders;

use App\Models\label;
use App\Models\Order;
use App\Models\Product;
use App\Models\Team;
use App\Models\User;
use Faker\Factory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Factoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        label::factory(5)->create();
        $user = User::factory(10)->hasLabels()->create();
        $teams = Team::factory(10)->hasLabels()->create();
        $products = Product::factory(5)->hasLabels()->create();
        $product = Product::factory()->count(10)->create();
        $order = Order::factory()->count(10)->create();
        $team = Team::factory()->count(10)->hasUsers()->create();
        //$orders ->questions()->saveMany(factory(Product::class, 10)->make())->each(function($product))->$product->tags()->sync(Factory(tag::class, 5)->make());
        $orders = Order::factory()->hasAttached(Product::factory()->count(3))->create();

    }
}
//Product::factory()->for($category)->for($brand)->hasAttached($warranty)->create();
