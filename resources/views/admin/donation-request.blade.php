
@extends('admin.admin-layouts')
@section('content')
 <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Food Donation  Request</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Number of Person
                      </th>
                      <th>
                        Food Type
                      </th>
                      <th>
                        Date 
                      </th>
                      <th>
                        Time 
                      </th>
                      <th>
                        Pick Up location
                      </th>
                      <th>
                        Contact
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($donation as $row)
                      <tr>
                        <td>
                        {{$row->amount}}
                        </td>
                        <td>
                      {{$row->food_type}}
                        </td>
                        <td>
                      {{$row->date}}
                        </td>
                        <td>
                           {{$row->time}}
                        </td>
                        <td>
                      {{$row->location}}
                        </td>
                        <td>
                      {{$row->contact}}
                        </td>
                        <td>
                          <form method="POST" action="">
                        	<button class="btn btn-success">Accept</button>
                      		<button class="btn btn-danger">Decline</button>
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
      </div>
@endsection