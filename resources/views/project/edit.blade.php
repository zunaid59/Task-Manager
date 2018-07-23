@extends('layouts.admin')

@section('content')




                    <div class="card-body">

                        <form action="{{url('/project')}}/{{$project->id}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            {!! csrf_field() !!}
                            Project Title:
                            <input type="text" class="form-control" name="project_title" value="{{$project->project_title}}"><br>
                            Type:
                            <input type="text" class="form-control" name="type" value="{{$project->type}}"><br>
                            Category:
                            <input type="text" class="form-control" name="category" value="{{$project->category}}"><br>
                            @if(Auth::user()->role >=5)
                            Description:
                            <textarea name="description" id="" cols="75" rows="5" class="form-control">{{$project->description}}</textarea><br>
                            URL :
                            <input type="text" name="url" class="form-control" value="{{$project->url}}"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    Starting Date:
                                    <input type="date" name="starting_date" class="form-control" value="{{$project->starting_date}}"><br>
                                </div>
                                <div class="col-md-6">
                                    Ending Date:
                                    <input type="date" name="ending_date" class="form-control" value="{{$project->ending_date}}"><br>
                                </div>
                            </div>
                            Remarks:
                            <input type="text" name="remarks" class="form-control" value="{{$project->remarks}}"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    Assign To:
                                    <input type="text" name="assign_to" class="form-control" value="{{$project->assign_to}}"><br>
                                </div>

                            </div>
                            Team Member:
                            <input type="text" name="team_member" class="form-control" value="{{$project->team_member}}"><br>
                            @endif
                            Image:
                            <img src="{{url('images/',$project->image)}}" style="height:50px; width: 60px; "><br><br>
                            <input type="file" class="form-control" name="image"><br>
                            Status:
                            <input type="text" name="status" class="form-control" value="{{$project->status}}"><br>
                            <input type="submit" class="btn btn-info" value="Update">
                        </form>

                    </div>
                </div>

@endsection
