<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppraisalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $year=random_int(2021, 2022);
        return [
            'user_id' => User::whereNotIn('id', function ($query) use ($year) {
                $query->select('user_id')
                      ->from('appraisals')
                      ->where('year', '=',$year);
            })
            ->where('type','employee')
            ->inRandomOrder()
            ->value('id'),
            'year' => $year,
            'h1' => random_int(1, 5),
            'h2' => random_int(1, 5),
        ];
    }
}
