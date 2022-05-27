@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Add Fee Category Amount</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Homepage</li>
								<!-- <li class="breadcrumb-item active" aria-current="page">Your Profile's Password</li> -->
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add fee amount</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
                <div class="row">
                    <div class="col">
                    <form action="{{route('student.fee.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                    <div class="row">


                            <div class="col-lg-12">
                                    
                            <div class="form-group">
								<h5>Fee Category <span class="text-danger">*</span></h5>
								<div class="controls">
                                <select name="fee_category" id="fee_category"  class="form-control">
										<option value="">Select Fee Category</option>
									 
                                        @foreach($fee_categories as  $fee_category)
                                        <option value="{{$fee_category->id}}">{{$fee_category->name}}</option>
                                        @endforeach  
									 										
									</select>
								</div>
								<span style="color:white;">
										@error('fee_category')

											{{$message}}

											@enderror

										</span>
							</div>    


                            </div>

                                                        
                            <div class="col-md-5">
                                    
                            <div class="form-group">
								<h5>Student Class <span class="text-danger">*</span></h5>
								<div class="controls">
                                <select name="class_id[id]" id="class_id"  class="form-control">
										<option value="">Select Student Class</option>
									 
                                        @foreach($classes as  $class)
                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach  
									 										
									</select>
								</div>
								<span style="color:white;">
										@error('class_id')

											{{$message}}

											@enderror

										</span>
							</div>    




                            </div>

                                
                            <div class="col-md-5">
                                    
                                <div class="form-fee">
                                    <h5>Fee Category Amount<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="amount[]" id="amount"
                                        class="form-control"  value="" placeholder="Amount here" > </div>
                                        <span style="color:white;">
                                        @error('amount')

                                        {{$message}}

                                        @enderror

                                        </span>
                                </div>


                            </div>

                                
                            <div class="col-md-2">
                                <br>
                                <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                             
                            </div>

                    </div>

                    <div class="text-xs-right">
                                            <br>
                                        <button type="submit" class="btn btn-rounded btn-primary btn-outline">Submit Fee Amount</button>
                            </div>

                    </form>     
                    </div>
                </div>
 
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->


@endsection