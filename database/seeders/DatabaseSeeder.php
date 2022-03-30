<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Subject::create(['subject_name'=>'English']);
        Subject::create(['subject_name'=>'Bengali']);
        Subject::create(['subject_name'=>'Hindi']);
        Subject::create(['subject_name'=>'Mathematics']);
        Subject::create(['subject_name'=>'History']);
        Subject::create(['subject_name'=>'Science']);
        Subject::create(['subject_name'=>'Geography']);
        Subject::create(['subject_name'=>'C-Language']);
        Subject::create(['subject_name'=>'JAVA']);
        Subject::create(['subject_name'=>'Python']);




        Chapter::insert([
            ['chapter_name' => 'Python Datatype', 'subject_id' => 10],
            ['chapter_name' => 'Python Class',  'subject_id' => 10],
            ['chapter_name' => 'Python Loop', 'subject_id' => 10],
            ['chapter_name' => 'Python Do-While-Loop', 'subject_id' => 10],
        ]);


        Question::insert([
            ['question' => 'What is String?', 'subject_id' => 10, 'chapter_id' => 1, 'question_type_id' =>1, 'question_level_id' =>1,image],
            ['question' => 'Define the class.', 'subject_id' => 10, 'chapter_id' => 2, 'question_type_id' =>2, 'question_level_id' =>2,image],
            ['question' => 'Briefly describe the for loop use in python.', 'subject_id' => 10, 'chapter_id' => 3, 'question_type_id' =>3, 'question_level_id' =>3,image],
        ]);


        Option::insert([
            ['option' => 'text', 'question_id' => 1, 'is_answer' => 1],
            ['option' => 'number',  'question_id' => 1, 'is_answer' => 0],
            ['option' => 'boolean', 'question_id' => 1, 'is_answer' => 0],
            ['option' => 'none of this', 'question_id' => 1, 'is_answer' => 0],
        ]);



        
        Question_type::insert([
            ['question_type_name' => 'single'],
            ['question_type_name' => 'multiple'],
            ['question_type_name' => 'boolean'],
        ]);


        Question_level::insert([
            ['level_name' => 'easy'],
            ['level_name' => 'medium'],
            ['level_name' => 'hard'],

        ]);

    }

}
