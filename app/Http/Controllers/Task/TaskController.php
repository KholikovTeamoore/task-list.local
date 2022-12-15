<?php

/**
 * Список задач
 *
 * PHP version 7
 *
 * @category App
 * @package  Controllers
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace App\Http\Controllers\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;

/**
 * Ресурсный контроллер для задач
 *
 * PHP version 7
 *
 * @category App
 * @package  Controllers
 * @author   Student <student@example.com>
 * @license  http://unlicense.org/ Unlicense
 * @version  Release: @package_version@
 * @link     http://php.net
 */
class TaskController extends Controller
{
    /**
     * Просмотр списка задач
     *
     * @return View
     */
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
            ->orderBy('priority', 'desc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }


    /**
     * Вызов формы создания задачи
     *
     * @return View
     */
    public function create()
    {
        return view('tasks.create');
    }


    /**
     * Сохранение новой задачи
     *
     * @param TaskRequest $request запрос
     *
     * @return RedirectResponse перенаправление
     */
    public function store(TaskRequest $request)
    {
        Task::create($request->all());

        return redirect()->route('tasks.index');
    }

    /**
     * Просмотр задачи
     *
     * @param int $id идентификатор задачи
     *
     * @return View
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', compact('task'));
    }


    /**
     * Вызов формы редактирования задачи
     *
     * @param int $id идентификатор задачи
     *
     * @return View
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }


    /**
     * Обновление задачи
     *
     * @param TaskRequest $request запрос
     * @param int     $id      идентификатор задачи
     *
     * @return RedirectResponse перенаправление
     */
    public function update(TaskRequest $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->except('user_id'));

        return redirect()->route('tasks.index');
    }


    /**
     * Удаление задачи
     *
     * @param int $id идентификатор задачи
     *
     * @return RedirectResponse перенаправление
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
