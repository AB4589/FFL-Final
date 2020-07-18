
@extends('admin.admin-layouts')
@section('content')
 <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Donors Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Number    
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Address
                      </th>
                      <th>
                        Registration Date
                      </th>
                    </thead>
                    <tbody>
                      @foreach($users as $row)
                      <tr>
                        <td>
                      {{$row->id}}
                        </td>
                        <td>
                      {{$row->name}}
                        </td>
                        <td>
                      {{$row->number}}
                        </td>
                        <td>
                      {{$row->email}}
                        </td>
                        <td>
                      {{$row->address}}
                        </td>
                        
                        <td>
                          {{$row->created_at}}
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