@extends('frontend.layouts.app')

@push('after-styles')
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<style>
    .form-control {
        border-color: transparent;
        border-radius: 0;
    }
    .form-control.no-border:hover,
    .form-control.no-border:focus {
        border-style: dotted;
        box-shadow: 0 0 0 transparent;
    }
    .ql-container {
        font-size: 16px;
        margin-bottom: 30px;
    }

    .ql-toolbar.ql-snow {
        border-color: transparent;
        padding: 8px;
    }
    .ql-container.ql-snow {
        border: dotted 1px transparent !important;
    }
    .form-control.no-border:focus, .form-control.no-border:hover,
    .ql-container.ql-snow:focus, .ql-container.ql-snow:hover {
        border-color: #e6e6e6 !important;
    }
</style>
@endpush

@section('content')
    
    <div class="row justify-content-center mb-3">
        <div class="col col-sm-8">

            <div class="clearfix text-center my-5">
                <h2>New Post</h2>
            </div>

                
            <form action="">
                <div class="clearfix">

                    <div class="form-group">
                        <input type="text" name="title" class="form-control no-border" placeholder="Post title...">
                    </div>
                    
                    <!-- Create the editor container -->
                    <div class="form-group">
                        <div id="editor">
                        </div>
                        <textarea name="content" id="contents" class=""></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" name="tags" class="form-control no-border" placeholder="Post tags...">
                    </div>

                    <div class="form-group">

                        <h4>Post Type:</h4>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio1">Standard</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Video</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Audio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Gallery</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Image</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">List</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" id="">
                    </div>

                </div>

                <div class="clearfix mt-5">
                    <div class="w-75 mx-auto">
                        <button type="button" id="submit" class="btn btn-primary btn-block">Create Post</button>
                    </div>
                </div>

            </form>
            
        </div>
    </div>


@endsection

@push('after-scripts')
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });

  
</script>
@endpush