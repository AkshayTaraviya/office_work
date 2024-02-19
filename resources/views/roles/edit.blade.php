@extends('layouts.role')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card border border-secondary mt-3 p-3">
                    <form method="POST" action="/roles/{{ $role->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-3">
                            <label>Role</label>
                            <input type="text" name="role" class="form-control border border-secondary" id="role">
                        </div>
                        <div class="form-group mt-3">
                            <button type='submit' class='btn btn-primary'>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
