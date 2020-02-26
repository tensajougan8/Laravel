@extends('layouts.master')

@section('title')
Freelancer Dashboard
@endsection()


@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th class="text-right">Password</th>
                    </thead>
                    <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                      </tr> 
                      @endforeach                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          @endsection()



@section('scripts')
@endsection()