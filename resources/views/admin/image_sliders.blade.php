@extends('backend_layouts.master')
@section('css')
<style>
	.w-180px {
		width: 180px !important;
	}
</style>
@endsection
@section('content')

<!--begin::Content-->
<div>
	<form action="{{route('admin.upload_images')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div>
			<input type="file" name="imageFile[]" class="upload" multiple id="files" required>
			<label class="custom-file-label" for="images">Choose image</label>
		</div>
		<div class="btn-wrapper">
			<button class="btn theme-btn-1 btn-effect-1" type="submit">Submit</button>
		</div>
	</form>
</div>
<!--end::Content-->
@endsection