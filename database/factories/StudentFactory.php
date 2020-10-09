<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'age'=>$this->faker->numberBetween(15, 90),
            'email' => $this->faker->unique()->safeEmail,            
            'phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender'=>$this->faker->numberBetween(0,2),
            'is_active'=>$this->faker->numberBetween(0,1),
        ];
    }
}
