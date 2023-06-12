@extends('../../layouts.app')

@section('title', 'Ford CKEditor')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/first_fee/first_fee_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">First Fee</label>
            <div class="col-md-9">
                <input type="number" name="first_fee_amount" id="first_fee_amount" class="form-control" value="@php if(!empty($row)) echo $row->first_fee_amount @endphp">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
<script>
    $(document).ready(function() {
		App.init();

        $(".menu_first_fee").prop('class', 'active');
    });
</script>
@endsection
