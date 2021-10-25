@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">


        <section class="content">


            <!-- Basic Forms -->
             <div class="box">

                        <div class="box-header with-border">
                            <h4 class="box-title">Add User</h4>
                            
                        </div>
               <!-- /.box-header -->


               <div class="box-body">
                 <div class="row">
                   <div class="col">


            <form method="POST" action=" {{route('users.store')}} ">
                @csrf

                         <div class="row">
                           <div class="col-12">	
                               
                   

                    <div class="row">
                        <div class="col-md-6">                            


                        <div class="form-group">
                            <h5>User Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="usertype" id="select" class="form-control" aria-invalid="false">
                                    <option value="" selected="" disabled="">Select</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
    
                                </select>
                            <div class="help-block"></div></div>                   
    
    
                        </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>User Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" id="name" required class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                               
                            </div> 
                        </div>
                  </div>   {{--  End row --}}

                    
                    <div class="row">
                        <div class="col-md-6">                            


                            <div class="form-group">
                                <h5>Email<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                            </div>                 
    
    
                        </div>

                        

                        <div class="col-md-6">
                         

                        <div class="form-group">
                            <h5>Password<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                        </div>
                        </div>
                    </div> {{--  End row --}}
                     
                </div> <!-- /.col -->
            </div><!-- /.row -->
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">
                    </div>
           
            </form>  <!-- /end form -->
        </div>   <!-- /.col -->
        
    </div> <!-- /.row -->
            
</div><!-- /box body -->
            
      
</div><!-- /.box -->
        
   
</section>

    
    </div>
</div>

@endsection