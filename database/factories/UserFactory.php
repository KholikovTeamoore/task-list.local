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
use Illuminate\Support\Str;

/**
 * Фабрика для модели User
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

class UserFactory extends Factory
{
    /**
     * Определение состояния модели по умолчанию.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Состояние для неподтвержденного пользователя
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Состояние для тестового пользователя
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function test()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'name' => 'test',
                    'email' => 'test@test.ru',
                    'password' => bcrypt('123456'),
                ];
            }
        );
    }
}
