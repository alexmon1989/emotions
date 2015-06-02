<?php

use Illuminate\Database\Seeder;
use Emotions\Action;

class ActionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('actions')->truncate();

        Action::create(array(
                'title' => 'Мы обновили наш сайт',
                'full_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'preview_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'file_name' => '1.jpg',
            )
        );

        Action::create(array(
                'title' => 'Мы обновили наш сайт',
                'full_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'preview_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'file_name' => '2.jpg',
            )
        );


        Action::create(array(
                'title' => 'Мы обновили наш сайт',
                'full_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'preview_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'file_name' => '3.jpg',
            )
        );


        Action::create(array(
                'title' => 'Мы обновили наш сайт',
                'full_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'preview_text' => 'Завершились работы по редизайну сайта "Эмоции в подарок".',
                'file_name' => '4.jpg',
            )
        );


    }

}