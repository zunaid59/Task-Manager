@extends('layouts.admin')
<style>
    .background_1{

        background-color: #edffa0;
    }
    .background_2{
        background-color: #ff9866;
    }
    .background_3{
        background-color: #b2ffa6;
    }
    .background_4{
        background-color: white;
    }
    .data_table{
        height: 800px;
        overflow-y: scroll;

    }

</style>
@section('content')

    <h2>Project List+</h2>
                <div class="table-responsive">
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
                    <?php
                           $endDate= $item['ending_date'];
                           $currentDate = date("Y-m-d");
                                $date_diff = strtotime($endDate) - strtotime($currentDate);
                                $date_diff = date("d", $date_diff);
                            //$background = 'background_1';
                                $startDate = $item['starting_date'];
                                if($startDate == $currentDate){
                                    $background = 'background_1';
                                }
                                else{
                                    $background = 'background_4';
                                }
                                if($date_diff <1){
                                    $background = "background_2";
                                }
                             $status = $item['status'];
                                if($status == 1){
                                    $background = "background_3";
                                }
                    ?>
                    <tr class="{{$background}}">
                        <td>{!! $item['project_title'] !!}</td>
                        <td>{!! $item['type'] !!}</td>
                        <td>{!! $item['category']!!}</td>
                        <td>{!! $item['description'] !!}</td>
                        <td>{!! $item['url'] !!}</td>
                        <td>{!! $item['starting_date'] !!}</td>
                        <td>{!! $item['ending_date'] !!}</td>
                        <td>{!! $item['remarks'] !!}</td>
                        <td>
                            <?php
                                $id = $item['assign_to'];
                                $assign_to = Auth::user()->find($id);
                            ?>
                            {!! $assign_to['name'] !!}

                        </td>
                        <td>
                            <?php
                            $id = $item['assign_by'];
                            $assign_by = Auth::user()->find($id);
                            ?>
                            {!! $assign_by ['name'] !!}</td>
                        <td>
                            <?php
                            $id = $item['team_member'];
                            $team_member = Auth::user()->find($id);
                            ?>
                            {!!$team_member['name'] !!}</td>

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
