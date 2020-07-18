
@extends('admin.admin-layouts')
@section('content')
 <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Contact Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        First Name
                      </th>
                      <th>
                       Last Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Message
                      </th>
                    </thead>
                    <tbody>
                    	@foreach($contacts as $row)
                      <tr>
                        <td>
                         {{$row['fname']}}
                        </td>
                        <td>
                          {{$row['lname']}}
                        </td>
                        <td>
                          {{$row['need']}}
                        </td>
                        <td>
                          {{$row['message']}}
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