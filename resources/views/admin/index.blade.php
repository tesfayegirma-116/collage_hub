@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	
</div>
</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
		<section 

			<div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Upload News</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  
				  <div class="form-group">
						<textarea id="compose-textarea" class="form-control" style="height: 300px">
						  
						</textarea>
				  </div>
				  <div class="form-group">
					<div class="btn btn-rounded btn-info btn-file">
					  <i class="fa fa-paperclip"></i> Attachment
					  <input type="file" name="attachment">
					</div>
					<p class="help-block">Max. 32MB</p>
				  </div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
				  <div class="pull-right">
					<button type="button" class="btn btn-rounded btn-default"><i class="fa fa-pencil"></i> Draft</button>
					<button type="submit" class="btn btn-rounded btn-success"><i class="fa fa-envelope-o"></i> Send</button>
				  </div>
				  <button type="reset" class="btn btn-rounded btn-danger"><i class="fa fa-times"></i> Discard</button>
				</div>
				<!-- /.box-footer -->
			</div>
		 <!-- /. box -->

		</section>
		<!-- /.right content --
	  </div>
  </div>

  @endsection