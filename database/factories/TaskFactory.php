<?php

/**
 * Список задач
 *
 * PHP version 8
 *
 * @category Database
 * @package  Factories
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Фабрика для модели Task
 *
 * PHP version 7
 *
 * @category Database
 * @package  Factories
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @version  Release: @package_version@
 * @link     http://php.net
 */
class TaskFactory extends Factory
{
    /**
     * Определение состояния модели по умолчанию.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'name' => $this->faker->sentence(mt_rand(3, 5)),
            'priority' => $this->faker->numberBetween(1, 3),
        ];
    }
}
