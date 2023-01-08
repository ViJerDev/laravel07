<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GameHomework extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Guess the number game';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->alert('Давай поиграем в игру ;)');

        $number = rand(1, 100);

        while (true) {

            $userNumber = $this->ask('Какое число загадал компьютер?');

            if ($number == $userNumber) {
                $this->alert('Ты угодал(а) число! Возьми с полки пирожок ;)');
                break;
            }

            if ($number < $userNumber) {
                $this->warn('Ваше число БОЛЬШЕ загаданного. Попробуйте еще :)');
            }

            if ($number > $userNumber) {
                $this->warn('Ваше число МЕНЬШЕ загаданного. Попробуйте еще :)');
            }
        }

        return Command::SUCCESS;
    }
}
