@extends('base')

<div class="col-sm-12">

  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
  @endif
</div>

@section('main')

<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Covid Datatable</h1>
    <div>
      <a style="margin: 19px;" href="{{ route('covids.create')}}" class="btn btn-primary">Record New Case</a>
    </div>
    <table class="display" id="covid-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Job Title</th>
          <th>City</th>
          <th>Country</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>111</td>
          <td>aaron</td>
          <td>1@1</td>
          <td>Job Title</td>
          <td>Honart</td>
          <td>Aus</td>
          <td>Add</td>
        </tr>
        <tr>
          <td>222</td>
          <td>baron</td>
          <td>1@1</td>
          <td>Job Title</td>
          <td>Launceston</td>
          <td>Aus</td>
          <td>Add</td>
        </tr>
      </tbody>
      {{-- <tbody>
        @foreach($covids as $covid)
        <tr>
          <td>{{$covid->id}}</td>
      <td>{{$covid->country}}</td>
      <td>{{$covid->total_cases}}</td>
      <td>{{$covid->new_cases}}</td>
      <td>{{$covid->total_deaths}}</td>
      <td>{{$covid->new_deaths}}</td>
      <td>
        <a href="{{ route('covids.edit',$covid->id)}}" class="btn btn-primary">Edit</a>
      </td>
      <td>
        <form action="{{ route('covids.destroy', $covid->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
      </tbody> --}}
    </table>
    <div>
    </div>
    @endsection
