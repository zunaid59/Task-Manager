@extends('layouts.admin')


@section('content')




                <div class="table-responsive"  >
                        <table class="table">
                            <tr>
                                <th>Project Title</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>URL</th>
                                <th>Starting Date</th>
                                <th>Ending Date</th>
                                <th>Remarks</th>
                                <th>Assign To</th>
                                <th>Assign By</th>
                                <th>Team Member</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>


                            @foreach($project as $item)
                                <tr class="background_1">
                                    <td>{!! $item['project_title'] !!}</td>
                                    <td>{!! $item['type'] !!}</td>
                                    <td>{!! $item['category']!!}</td>
                                    <td>{!! $item['description'] !!}</td>
                                    <td>{!! $item['url'] !!}</td>
                                    <td>{!! $item['starting_date'] !!}</td>
                                    <td>{!! $item['ending_date'] !!}</td>
                                    <td>{!! $item['remarks'] !!}</td>
                                    <td>{!! $item['assign_to'] !!}</td>
                                    <td>{!! $item['assign_by'] !!}</td>
                                    <td>{!! $item['team_member'] !!}</td>
                                    <td><img src="{{url('images',$item->image)}}" style="height:50px; width: 60px; ">
                                        {!! $item['image'] !!}</td>

                                    <td>{!! $item['status'] !!}</td>
                                    <td>
                                        <a href="{{url('/project')}}/{{$item->id}}/{{'edit'}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{url('/project')}}/{{$item->id}}" class="btn btn-info btn-sm">Show</a>
                                        <form  action="{{url('/project')}}/{{$item->id}}" method="post">
                                            @method('DELETE')
                                            {!! csrf_field() !!}

                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">

                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </table>

                </div>

@endsection
