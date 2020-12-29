@extends("layout.master")
@section("content")
<div class="container col-12 col-md-10 col-lg-10 center">
    <a class="btn btn-primary mt-4" href="/add">Add New Player</a>
    <h3 class="my-4">List Of All Cricketers</h3>
    <table class="table">
    <tr>
        <th>ID</th> <th>Name</th> <th>Country</th> 
        <th class="row">Highest Score &nbsp;&nbsp;
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/ascending">Ascending Order</a>
                        <a class="dropdown-item" href="/descending">Descending Order</a>
                </div>
            </div> </th> 
            <th>Actions</th>
    </tr>
    @foreach($players as $player)
    <tr>
        <td>{{$player->id}}</td>
        <td>{{$player->name}}</td>
        <td>{{$player->country}}</td>
        <td>{{$player->score}}</td>
        <td>
            <a class="btn btn-info" href="/edit/{{$player->id}}">Edit</a>
            <a class="btn btn-danger" href="/delete/{{$player->id}}" onclick="return confirm('Are you sure you want to remove this player?');">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
</div>
@endsection