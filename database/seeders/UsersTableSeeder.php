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

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Загрузка данных пользователей
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
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(1)
            ->test()
            ->create();
    }
}
