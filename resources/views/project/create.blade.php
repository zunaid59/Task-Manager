@extends('layouts.admin')


@section('content')

               <h3>Assign Project</h3>


                    <div class="card-body">
                        <form action="{{url('/project')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            Project Title:
                            <input type="text" class="form-control" name="project_title"><br>
                            Type:
                            <select name="type" id="" class="form-control">
                                <option value="inhouse">In House</option>
                                <option value="commercial">Commercial</option>
                            </select><br>

                            Category:
                            <input type="text" class="form-control" name="category"><br>
                            Description:
                            <textarea name="description" id="" cols="50" rows="5" class="form-control"></textarea><br>
                            URL :
                            <input type="text" name="url" class="form-control"><br>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    Starting Date:
                                    <input type="date" name="starting_date" class="form-control"><br>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    Ending Date:
                                    <input type="date" name="ending_date" class="form-control"><br>
                                </div>

                            </div>
                            Remarks:
                            <input type="text" name="remarks" class="form-control"><br>
                            <div class="row">

                                <div class="col-sm-12 col-md-12">

                                    Assign To:

                                    <select name="assign_to" id="" class="form-control">
                                        @foreach($user as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>
                            <br>
                            Team Member:
                            <select name="team_member" id="" class="form-control">
                                    @foreach($user as $item)
                                        <option value=""></option>
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach

                            </select><br>
                            Image:
                            <input type="file"value="Upload Image" name="image" class="form-control"><br>
                            Status:
                            <select name="status" id="" class="form-control">
                                <option value="">  </option>
                                <option value="1">Completed</option>
                                <option value="2">Pending</option>
                                <option value="3">Draft</option>


                            </select><br>
                            <input type="submit" class="btn btn-info" value="Submit">
                        </form>
                    </div>

@endsection