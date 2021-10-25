@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">


        <section class="content">


            <!-- Basic Forms -->
             <div class="box">

                        <div class="box-header with-border">
                            <h4 class="box-title">Change Profile Password</h4>
                            
                        </div>
               <!-- /.box-header -->


               <div class="box-body">
                 <div class="row">
                   <div class="col">


            <form method="POST" action=" {{route('password.update')}} ">
                @csrf

                         <div class="row">
                           <div class="col-12">	
                               
                   

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <h5>Current Password <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="password" id="current_password" name="current_password"  class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                    
                </div> 
                @error('current_password')
                  <span class="text-danger"> {{ $message }} </span>  
                @enderror
            </div>
        
        </div>   {{--  End row --}}
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <h5>New Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input id="password" type="password" name="password"   class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                               
                            </div> 

                            @error('password')
                            <span class="text-danger"> {{ $message }} </span>  
                          @enderror
                            
                        </div>
                  
                    </div>   {{--  End row --}}
                    
                    <div class="row">
                        <div class="col-md-12">                            


                            <div class="form-group">
                                <h5>Confirm Password<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"  data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                            </div>                 
                            @error('password_confirmation')
                            <span class="text-danger"> {{ $message }} </span>  
                          @enderror
    
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