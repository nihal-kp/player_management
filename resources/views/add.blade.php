@extends("layout.master")
@section("content")
<div class="container col-9 col-md-7 col-lg-7 center">
    <h3 class="my-4">Add New Player</h3>
    <form class="form-horizontal" action="/add" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name of the player" name="name" value="{{ old('name') }}" required>
            @error("name")
            <p style="color:red">{{$errors->first("name")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <select name="country" class="custom-select" required>
                <option value="India">India</option>
                <option value="Autralia">Australia</option>
                <option value="South Africa">South Africa</option>
                <option value="Pakistan">Pakistan</option>
            </select>
            @error("country")
            <p style="color:red">{{$errors->first("country")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="score">Highest Score:</label>
            <input type="text" class="form-control" placeholder="Enter high score" name="score" value="{{ old('score') }}" required>
            @error("score")
            <p style="color:red">{{$errors->first("score")}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success my-4 mx-3">Add Now</button>
        <a class="btn btn-info mx-3 my-4" href="/">Go Back</a>
    </form>
</div>
@endsection