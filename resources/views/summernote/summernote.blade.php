{{-- @extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <textarea class="form-control" name="description" id="summernote"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200,
            // minHeight : 100,
            placeholder: 'Enter Description',
            // toolbar: false,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear','style']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ]
        });
    </script>
@endpush --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Summernote
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('summernote.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="body" id="summernote"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-default btn-block">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200,
            // minHeight : 100,
            placeholder: 'Enter Description',
            // toolbar: false,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear','style']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ]
        });
    </script>
</html>