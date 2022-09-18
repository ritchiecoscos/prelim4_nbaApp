<div>
    <div class="bgg">
   <div class="container col-md-6 offset-md-3 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-dark">Edit Player</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="player_name">
                <label for="player_name">Player Name</label>
                @error('player_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="age">
                <label for="age">Age</label>
                @error('age')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="jersey_no">
                <label for="jersey_no">Jersey_no</label>
                @error('jersey_no')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="conference" class="form-select" wire:model.defer="conference">
                    <option hidden="true">Conference </option>
                    <option selected disabled>Select Degree</option>
                    <option value="Western">Western</option>
                    <option value="Eastern">Eastern</option>
                </select>
                <label for="conference">Conference</label>
                @error('conference')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="position" class="form-select" wire:model.defer="position">
                    <option hidden="true">Position</option>
                    <option selected disabled>Year</option>
                    <option value="1">Center</option>
                    <option value="2">Forward</option>
                    <option value="3">Point Guard</option>
                    <option value="4">Shooting Guard</option>
                </select>
                <label for="position">Position</label>
                @error('position')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mb-3 grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-secondary" type="submit" wire:click="editPlay()">
                    Edit Player
                </button>
            </div>
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
    background-image:url('{{asset('/images/bg.jpg')}}');
}
.card-header{
    background-image:url('{{asset('/images/bg3.jpg')}}');
    }
</style>
