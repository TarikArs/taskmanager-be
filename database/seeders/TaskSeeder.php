<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cout = 5;
        $user = User::first();
        for ($i = 0; $i < $cout; $i++) {
            $task = [
                'title' => 'Task ' . $i,
                'description' => $this->generateRandomText(rand(10, 50)),
                'owner_id' => $user->_id,
                'status' => rand(0, 1)
            ];
            Task::insert($task);
        }
    }
    public function generateRandomText($wordCount)
    {
        $words = array(
            "Lorem", "ipsum", "dolor", "sit", "amet", "consectetur",
            "adipiscing", "elit", "sed", "do", "eiusmod", "tempor",
            "incididunt", "ut", "labore", "et", "dolore", "magna", "aliqua"

        );

        $randomText = "";

        for ($i = 0; $i < $wordCount; $i++) {
            $randomWord = $words[array_rand($words)];
            $randomText .= $randomWord . " ";
        }

        // Remove trailing space
        $randomText = trim($randomText);

        return $randomText;
    }
}
