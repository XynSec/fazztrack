<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "bayar" => $this->$faker->numberBetween(1, 50000),
            "kembali" => $this->$faker->numberBetween(25, 500000),
     ];
    }
}
