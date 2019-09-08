<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
Use Alert;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::paginate(10);
        return view('dashboard.tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Task $model)
    {
        return view('dashboard.tasks.create', compact('model'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'body' => 'required',
            'project_id' => 'required',
            'published_at' => 'required',
            'status' => 'required',
            'image' => 'required',

        ]);
        $tasks = Task::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/tasks/' . $name);
            $tasks->image = 'uploads/tasks/' . $name;
            $tasks->save();
        }
//        if ($request->hasFile('photo')) {
//            $photos = $request->file('photo');
//            foreach ($photos as $photo) {
//                $name = time() . '' . rand(1111, 99999) . '.' . $photo->getClientOriginalExtension();
//                $photo = Image::make($photo);
//                $photo->save('uploads/news/images/' . $name);
//                $image = new Photo();
//                $image->url = 'uploads/news/images/' . $name;
//                $news->photos()->save($image);
//            }
//        }

        alert()->success('success Adding');
        return redirect('AdminPanel/Tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('dashboard.tasks.show', compact('task','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Task::findOrFail($id);
        return view('dashboard.tasks.edit', compact('model'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'body' => 'required',
            'published_at' => 'required',
            'status' => 'required',
            'project_id' => 'required',


        ]);
        $tasks= Task::findOrFail($id);
        $tasks->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/tasks/' . $name);
            $tasks->image = 'uploads/tasks/' . $name;
            $tasks->save();
        }

        alert()->success('success Editting');
        return redirect('AdminPanel/Tasks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        alert()->warning('success Deleting');
        return back();
    }



    public function active($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 1;
        $task->save();
        alert()->success(' Activing Task');
        return back();


    }

    public function unactive($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 0;
        $task->save();
        alert()->success('UnActiving Task');
        return back();

    }


}
