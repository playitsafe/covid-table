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
          <th>Country</th>
          <th>Total<br>Cases</th>
          <th>New<br>Cases</th>
          <th>Total<br>Deaths</th>
          <th>New<br>Deaths</th>
          <th>Total<br>Recovered</th>
          <th>Active<br>Cases</th>
          <th>Critical</th>
          <th>Tot<br>Cases<br>/1M Pop</th>
          <th>Deaths<br>/1M Pop</th>
          <th>Population</th>
          <th>Cases<br>/x ppl</th>
          <th>Deaths<br>/x ppl</th>
          <th>Tests<br>/1M Pop</th>
          <th>DaysBefore</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($covids as $covid)
        <tr>
          {{-- <td>{{$covid->id}}</td> --}}
          <td>{{$covid->country}}</td>
          <td>{{$covid->total_cases}}</td>
          <td>{{$covid->new_cases}}</td>
          <td>{{$covid->total_deaths}}</td>
          <td>{{$covid->new_deaths}}</td>
          <td>{{$covid->total_recovered}}</td>
          <td>{{$covid->active_cases}}</td>
          <td>{{$covid->critical}}</td>
          <td>{{$covid->total_in_1M}}</td>
          <td>{{$covid->deaths_in_1M}}</td>
          <td>{{$covid->population}}</td>
          <td>{{$covid->case_in_x_ppl}}</td>
          <td>{{$covid->death_in_x_ppl}}</td>
          <td>{{$covid->test_in_x_ppl}}</td>
          <td>{{$covid->daysbefore}}</td>
          <td>
            <div class="action d-flex flex-row align-items-center">
              <a href="{{ route('covids.edit',$covid->id)}}" class="btn btn-primary btn-sm mr-1"><i class="far fa-edit"></i></a>
              <form action="{{ route('covids.destroy', $covid->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm mt-2" type="submit"><i class="far fa-trash-alt"></i></button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
    </div>
    @endsection
