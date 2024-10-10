@extends('layout.admin')
@section('title','Affilly')
@section('content')
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<div class="content-wrapper" style="min-height: 1091px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		<div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
                 <h4 class="box-title">Add Articles</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <form role="form" method="POST" action="{{url('/admin-update-article')}}">
				      @csrf
				    <input type="hidden" name="id" value="{{$article->id}}">
				    <!-- textarea --> 
				    
					<div class="form-group">
					  <label class="form-label">Title</label>
                          <input class="form-control" value="{{$article->title}}" placeholder="Enter a Title" maxlength="54" name="title" >
       					</div>
					<div class="form-group">
					  <label class="form-label">Content</label>
					     <textarea class="form-control" value="" id="body" placeholder="Enter a content" name="content" rows="3"  >{{$article->content}}
                                
                                </textarea>
					  <!--<textarea class="form-control" rows="3" name="content" value="" placeholder="Enter a content">{{$article->content}}</textarea>-->
					</div>
                    <input type="submit" class="btn btn-primary" value="Update" fdprocessedid="2lc0xj"> 
				  </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!--/.col (right) -->
		  </div>
		
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <script>
    ClassicEditor.create(document.querySelector('#body')).catch(error => {
        console.error(error);
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
  @endsection