<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       // $project =Project::where('projects','id',Auth::user()->id);

           $project = Project::all();

        return view('project.projectList',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user  = User::all();
        return view('project.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $data = new Project();
       $session_id = Auth::id();
//
//        $data->project_title = $request->project_title;
//        $data->category = $request->category;
//        $data->type = $request->type;
//        $data->description = $request->description;
//        $data->url = $request->url;
//        $data->starting_date = $request->starting_date;
//        $data->ending_date = $request->ending_date;
//        $data->remarks = $request->remarks;
//        $data->assign_to= $request->assign_to;
           $data->assign_by= $session_id;
//          $data->status = $request->status;

        $image = $request->image;
        if($image){
            $imgName = $image->getClientOriginalName();

            $image->move('images',$imgName);

            $data->image = $imgName;
        }

        $data->fill($request->all());


        $data->save();

        return redirect('/project');






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit',compact('project'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $id = $project->id;
        $old = Project::find($id);
        $updateData=$request->all();


        if($request->hasFile('image')){
            //$newImg = $request->image->getClientOriginalName();
            $img = $request->image;

            $imageName = $img->getClientOriginalName();



            $img->move('images',$imageName);

            $oldImage= $old->image;
            if(file_exists(public_path('images/') . '' . $oldImage)) {
                unlink(public_path('images/') . '' . $oldImage);

                // $request['image'] = $newimg;
            }
            $updateData['image'] = $imageName;
        }
          // echo $newImg;
          //dd($updateData);
        $old->update($updateData);
        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $id= $project->id;
        //image delete
        unlink(public_path('images/').$project['image']);

        Project::find($id)->delete();
        return redirect('project');
    }
}
