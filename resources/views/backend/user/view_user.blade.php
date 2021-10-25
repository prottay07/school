@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Model School</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Model School</li>
                              <li class="breadcrumb-item active" aria-current="page">User Management Page</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            


          <div class="col-12">          

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">User List</h3>
                <a href="{{route('users.add')}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Sl</th>
                              <th>Role</th>
                              <th>User Name</th>
                              <th>Email</th>
                              <th>Action</th>
                             
                          </tr>
                      </thead>
                      <tbody>
                        
                        @foreach($allData as $key=>$user)
                          <tr>
                              <td width="5%">{{$key+1}}</td>
                              <td width="20%">{{$user->usertype}}</td>
                              <td width="20%">{{$user->name}}</td>
                              <td width="30%">{{$user->email}}</td>
                              <td width= "25%">
                                  <a href=" {{route('users.edit', $user->id)}} " class="btn btn-info"> Edit</a>
                                  <a href="{{route('users.delete', $user->id)}}" class="btn btn-danger" id="delete">Delete</a>
                              </td>
                             
                          </tr>
                    @endforeach

                      </tbody>
                      <tfoot>
                          
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

 
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>

@endsection