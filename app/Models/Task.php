<?php

/**
 * Список задач
 *
 * PHP version 7
 *
 * @category App
 * @package  Models
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель Task
 *
 * PHP version 7
 *
 * @category App
 * @package  Models
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @version  Release: @package_version@
 * @link     http://php.net
 */

class Task extends Model
{
    use HasFactory;

    /**
     * Атрибуты, для которых разрешено массовое присвоение значений..
     *
     * @var array <int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'priority',
    ];
}
