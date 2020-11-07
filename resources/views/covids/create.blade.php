@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Covid Record</h1>
    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form method="post" action="{{ route('covids.store') }}">
        @csrf
        <div class="form-group">
          <label for="country">Country:</label>
          <input type="text" class="form-control" name="country" />
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="total_cases">Total Cases:</label>
            <input type="number" class="form-control" name="total_cases" />
          </div>
          <div class="form-group col-md-6">
            <label for="new_cases">New Cases:</label>
            <input type="number" class="form-control" name="new_cases" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="total_deaths">Total Deaths:</label>
            <input type="number" class="form-control" name="total_deaths" />
          </div>
          <div class="form-group col-md-6">
            <label for="new_deaths">New Deaths:</label>
            <input type="number" class="form-control" name="new_deaths" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="total_recovered">Total Recovered:</label>
            <input type="number" class="form-control" name="total_recovered" />
          </div>
          <div class="form-group col-md-4">
            <label for="active_cases">Active Cases:</label>
            <input type="number" class="form-control" name="active_cases" />
          </div>
          <div class="form-group col-md-4">
            <label for="critical">Critical Cases:</label>
            <input type="number" class="form-control" name="critical" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="population">Population:</label>
            <input type="number" class="form-control" name="population" />
          </div>
          <div class="form-group col-md-6">
            <label for="total_in_1M">Total Cases in 1 Million Population:</label>
            <input type="number" class="form-control" name="total_in_1M" />
          </div>
          <div class="form-group col-md-6">
            <label for="deaths_in_1M">Total Deaths in 1 Million Population:</label>
            <input type="number" class="form-control" name="deaths_in_1M" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="case_in_x_ppl">1 case every X population:</label>
            <input type="number" class="form-control" name="case_in_x_ppl" />
          </div>
          <div class="form-group col-md-4">
            <label for="death_in_x_ppl">1 death every X population:</label>
            <input type="number" class="form-control" name="death_in_x_ppl" />
          </div>
          <div class="form-group col-md-4">
            <label for="test_in_x_ppl">1 test every X population:</label>
            <input type="number" class="form-control" name="test_in_x_ppl" />
          </div>
        </div>

        <div class="form-row">
          <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
              <label class="input-group-text" for="daysbefore">Record for </label>
            </div>
            <select class="custom-select" id="daysbefore" name="daysbefore">
              <option value="0" selected>Today</option>
              <option value="1">Yesterday</option>
              <option value="2">2 Days Ago</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg mt-3">Add A Covid Record</button>
      </form>
    </div>
  </div>
</div>
@endsection
