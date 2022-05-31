<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Internet;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_client' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'number_phone' => $this->faker->numerify('###-###-####'),
            'number_account' => $this->faker->numerify('##########'), 
            'addres' => Str::random(10), 
            'company_name'  => Str::random(6)
        ];
    }
}
