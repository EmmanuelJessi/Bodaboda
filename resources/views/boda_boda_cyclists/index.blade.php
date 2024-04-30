@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Boda-Boda Cyclists</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <!-- Add other column headings -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cyclists as $cyclist)
                            <tr>
                                <td>{{ $cyclist->name }}</td>
                                <td>{{ $cyclist->age }}</td>
                                <td>{{ $cyclist->address }}</td>
                                <!-- Display other cyclist details -->
                                <td>
                                    <a href="{{ route('boda-boda-cyclists.edit', $cyclist->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('boda-boda-cyclists.destroy', $cyclist->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
