<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([
            [
                'name' => 'Cooking Quiz',
                'updated_at' => null,
                'created_at' => new DateTime(),
                'q1' => 'Are eggs used in the making of an omelette?',
                'q2' => 'Was the chicken tikka masala invented in India?',
                'q3' => 'Does using more flour in bread dough make it more crumbly?',
                'a1' => 'y',
                'a2' => 'n',
                'a3' => 'y',

            ],
            [
                'name' => 'Real Obscure Indie Rock Band Or Random String Of Words?',
                'updated_at' => null,
                'created_at' => new DateTime(),
                'q1' => 'Is "And So I Watch You From Afar" an indie rock band?',
                'q2' => 'Is "The World Is A Beautiful Place And I Am No Longer Afraid To Die" an indie rock band?',
                'q3' => 'Is "Tony Flow and the Miraculously Majestic Masters of Mayhem" an indie rock band?',
                'a1' => 'y',
                'a2' => 'y',
                'a3' => 'n',
            ],
            [
                'name' => 'Pasta Or Italian Composer?',
                'updated_at' => null,
                'created_at' => new DateTime(),
                'q1' => 'Was Sorprese an Italian composer?',
                'q2' => 'Was Campagnioli an Italian composer?',
                'q3' => 'Was Testaroli an Italian composer?',
                'a1' => 'n',
                'a2' => 'y',
                'a3' => 'n',
            ]
        ]);
    }
}
