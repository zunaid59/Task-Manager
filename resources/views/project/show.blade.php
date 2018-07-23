<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Showing Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <table class="table table-striped">
                <tr><th>Project Title</th>
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
                </tr>


                    <tr>
                        <td>{!! $project->project_title !!}</td>
                        <td>{!! $project->type !!}</td>
                        <td>{!! $project->category !!}</td>
                        <td>{!! $project->description !!}</td>
                        <td>{!!$project->url !!}</td>
                        <td>{!! $project->starting_date !!}</td>
                        <td>{!! $project->ending_date !!}</td>
                        <td>{!! $project->remarks !!}</td>
                        <td>{!! $project->assign_to !!}</td>
                        <td>{!! $project->assign_by!!}</td>
                        <td>{!!$project->team_member !!}</td>
                        <td><img src="{{url('images',$project->image)}}" style="height:50px; width: 60px; ">
                            {!! $project->image !!}</td>
                        <td>{!! $project->status !!}</td>
                    </tr>


            </table>
        </div>
    </div>
</div>

</body>
</html>
