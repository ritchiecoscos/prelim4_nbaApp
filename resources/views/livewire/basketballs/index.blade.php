<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id No</th>
                <th>Player Name</th>
                <th>Age</th>
                <th>Jersey_No</th>
                <th>Conference</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($basketballs as $basketball)
                <tr>
                    <th>{{$basketball->id}}</th>
                    <th>{{$basketball->player_name}}</th>
                    <th>{{$basketball->age}}</th>
                    <th>{{$basketball->jersey_no}}</th>
                    <th>{{$basketball->conference}}</th>
                    <th>{{$basketball->position}}</th>
                    <td >
                        <a href="{{url('edit', ['players' => $basketball->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    </td>
                    <td >
                        <a href="{{url('delete', ['players' => $basketball->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    body {
  background-size: cover;
  background-image:url('{{asset('/images/bg1.jpg')}}');
}
</style>
