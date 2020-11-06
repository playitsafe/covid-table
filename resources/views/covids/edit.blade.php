@extends('base')
@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Update a Covid Record</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    <br />
    @endif
    <form method="post" action="{{ route('covids.update', $covid->id) }}">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" value={{ $covid->first_name }} />
      </div>

      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" value={{ $covid->last_name }} />
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value={{ $covid->email }} />
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" name="city" value={{ $covid->city }} />
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" name="country" value={{ $covid->country }} />
      </div>
      <div class="form-group">
        <label for="job_title">Job Title:</label>
        <input type="text" class="form-control" name="job_title" value={{ $covid->job_title }} />
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection
