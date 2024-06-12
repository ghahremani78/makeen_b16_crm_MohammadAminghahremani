<?php

namespace Database\Seeders;

use App\Models\Label;
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
        Label::factory(5)->create();
        Team::factory(10)->hasLabels()->create();
        User::factory(10)->hasLabels()->create();
        Product::factory(5)->hasLabels()->create();
        Product::factory()->count(10)->create();
        Order::factory()->count(10)->create();
        Team::factory()->count(10)->hasUsers()->create();
        Order::factory()->hasAttached(Product::factory()->count(3))->create();

    }
}

