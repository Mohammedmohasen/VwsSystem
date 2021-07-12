<?php

namespace Database\Factories\Student;

use App\Models\Student\student_mailbox;
use Illuminate\Database\Eloquent\Factories\Factory;

class studentMailboxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = student_mailbox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
