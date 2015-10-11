@extends('master')

@section('content')
        <!-- Default box -->
<div class="box box-primary">
    <form action="{{ url('sample/file') }}" method="post" enctype="multipart/form-data">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="file1">

                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                </div>
            </div>
            {!! csrf_field() !!}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection