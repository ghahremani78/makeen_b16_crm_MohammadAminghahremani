<?php

namespace App\Jobs;

use App\Models\Brand;
use App\Models\Product;
use Database\Factories\BrandFactory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

     protected $id = null;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Product::create([
            'productname'=>fake()->name(),
            'price'=>round(fake()->numberBetween(25000, 55000), -3),
            'memory'=>fake()->randomFloat(128,256,512),
            'operatingsystem'=>fake()->randomElement(['a','i']),
            'color'=>fake()->colorName(),
            'path_image' =>fake()->imageUrl(640, 480, 'animals', true),
            'brand_id'=>$this->id


        ]);
    }
}
