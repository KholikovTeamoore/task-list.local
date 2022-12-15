<?php

/**
 * Список задач
 *
 * PHP version 7
 *
 * @category Database
 * @package  Seeders
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Загрузка данных
 *
 * PHP version 7
 *
 * @category Database
 * @package  Seeders
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @version  Release: @package_version@
 * @link     http://php.net
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Загрузка данных в БД
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UsersTableSeeder::class,
                // TasksTableSeeder::class,
            ]
        );
    }
}
