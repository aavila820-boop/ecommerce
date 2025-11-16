<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BrandFactory extends Factory
{

    protected $model = Brand::class;

    public function definition(): array
    {
        $brands = [
            'Appel',
            'Samsung',
            'Xiaomi',
            'LG',
            'Sony',
            'Dell',
            'HP',
            'Lenovo',
            'Asus',
            'Acer',
            'Microsoft'
        ];

        return [
            'name' => $this->faker->randomElement($brands),
        ];
    }
}
