@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Search Boda-Boda Cyclists</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('boda-boda-cyclists.search') }}">
                        <div class="form-group">
                            <label for="keyword">Search Keyword</label>
                            <input type="text" class="form-control" id="keyword" name="keyword" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
