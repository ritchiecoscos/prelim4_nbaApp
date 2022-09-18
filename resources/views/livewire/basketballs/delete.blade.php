<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center text-dark">Delete play??</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td class="text-white">{{$this->basketball->player_name}}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td class="text-white">{{$this->basketball->age}}</td>
                    </tr>
                    <tr>
                        <th>Jersey_No</th>
                        <td class="text-white"> {{$this->basketball->jersey_no}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm" wire:click="deletePlay()">
                        delete
                    </button>
                    <button class="btn btn-success btn-sm mx-2">
                        back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
body {
  background-size: cover;
  background-image:url('{{asset('/images/nba3.jpg')}}');
}
.card{
    background-image:url('{{asset('/images/bg3.jpg')}}');
}
</style>
