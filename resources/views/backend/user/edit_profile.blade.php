@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
    <div class="container-full">


        <section class="content">


            <!-- Basic Forms -->
             <div class="box">

                        <div class="box-header with-border">
                            <h4 class="box-title">Edit Profile</h4>
                            
                        </div>
               <!-- /.box-header -->


               <div class="box-body">
                 <div class="row">
                   <div class="col">


            <form method="POST" action=" {{route('profile.store')}} " enctype="multipart/form-data">
                @csrf

                         <div class="row">
                           <div class="col-12">	


<div class="row">

    <div class="col-md-6">                            
    
    
        <div class="form-group">
                <h5>User Name<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="name" value=" {{$editData->name}} "  class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div>
                </div>
        </div>             
    
    </div>
    
                            
    
    <div class="col-md-6">
        <div class="form-group">
            <h5>Email<span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="email" name="email" value=" {{$editData->email}} "  class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div>
            </div>
    </div>     
    
    </div>
    </div> {{--  End row --}}

    <div class="row">

        <div class="col-md-6">                            
        
        
            <div class="form-group">
                    <h5>Address<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="address" value=" {{$editData->address}} "  class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div>
                    </div>
            </div>             
        
        </div>
        
                                
        
        <div class="col-md-6">
            <div class="form-group">
                <h5>Mobile<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="mobile" value=" {{$editData->mobile}} "  class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div>
                </div>
        </div>     
        
        </div>
        </div> {{--  End row --}}
                   

    <div class="row">
        <div class="col-md-6">                            


        <div class="form-group">
            <h5>User Gender <span class="text-danger">*</span></h5>
            <div class="controls">
                <select name="gender" id="select" class="form-control" aria-invalid="false">
                    <option value="" selected="" disabled="">Select</option>
                    <option value="Male" {{$editData->gender=='Male'? "selected" : ""}}>Male</option>
                    <option value="Female"  {{$editData->gender=='Female'? "selected" : ""}}>Female</option>

                </select>
            <div class="help-block"></div></div>                   


        </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
                <h5>User Image <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="file" id="image" name="image" id="name"  class="form-control" > <div class="help-block"></div></div>
                
            </div>
            
            <div class="form-group">
                <img src="{{ (!empty($user->image)? url('upload/user_image/'.$user->image) : url('upload/no_image.jpg'))}}" id="showImage"
                style="width:100px; height:100px; border: 1px solid #000000" alt="">
                
            </div> 
        </div>


    </div>   {{--  End row --}}

                    

                     
                </div> <!-- /.col -->
            </div><!-- /.row -->
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                    </div>
           
            </form>  <!-- /end form -->
        </div>   <!-- /.col -->
        
    </div> <!-- /.row -->
            
</div><!-- /box body -->
            
      
</div><!-- /.box -->
        
   
</section>

    
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">



$(document).ready(function(){
    $("#image").change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $("#showImage").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });
});
</script>

@endsection