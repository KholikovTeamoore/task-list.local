<?php

/**
 * Список задач
 *
 * PHP version 7
 *
 * @category App
 * @package  FormRequest
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @link     http://php.net
 */

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Класс валидатор для создания и обновления задач
 *
 * @category App
 * @package  FormRequest
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @version  Release: @package_version@
 * @link     http://php.net
 */
class TaskRequest extends FormRequest
{
    /**
     * Определить авторизован ли пользователь делать такой запрос.
     *
     * @return bool
     */
    public function authorize()
    {
        $task = Task::find($this->route('task'));
        if (isset($task)) {
            if (Auth::id() !== $task->user_id) {
                return false;
            }
        }
        return true;
    }


    /**
     * Получить правила валидации, применимые к запросу.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'priority' => 'required|integer|between:1,3'
        ];
    }

    /**
     * Получить сообщения об ошибках для определенных правил проверки.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Необходимо ввести название задачи',
            'name.max' => 'Название задачи должно быть короче :max символов',
            'priority.required' => 'Необходимо выбрать приоритет выполнения задачи',
            'priority.integer' => 'Приоритет должен быть целым числом',
            'priority.between' => 'Текущий приоритет :input. Ранг приоритета должен быть от :min до :max',
        ];
    }
}
