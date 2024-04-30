@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Register New Boda-Boda Cyclist</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('boda-boda-cyclists.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address of Residence</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>

                        <!-- Other fields like contact, next of kin details, motorcycle registration, stage -->

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
