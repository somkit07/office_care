@extends('../../layouts.app')

@section('title', 'Rate Agent')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/rate_agent/rate_agent_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Drop Ship or Stock Product</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">1 - 9 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_1_9" id="rate_agent_drop_ship_1_9" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_1_9 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">10 - 29 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_10_29" id="rate_agent_drop_ship_10_29" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_10_29 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">30 - 59 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_30_59" id="rate_agent_drop_ship_30_59" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_30_59 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">60 - 149 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_60_149" id="rate_agent_drop_ship_60_149" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_60_149 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">150 - 999 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_150_999" id="rate_agent_drop_ship_150_999" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_150_999 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">1000 - 4999 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_1000_4999" id="rate_agent_drop_ship_1000_4999" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_1000_4999 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">5000 - 10000 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_drop_ship_5000_10000" id="rate_agent_drop_ship_5000_10000" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_drop_ship_5000_10000 @endphp" required>
            </div>
        </div>
        <legend>Member Thai Franchise Online</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">All (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_member_thai_franchise_online" id="rate_agent_member_thai_franchise_online" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_member_thai_franchise_online @endphp" required>
            </div>
        </div>
        <legend>Dealer Partner</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">1 - 9 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_1_9" id="rate_agent_dealer_partner_1_9" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_1_9 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">10 - 29 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_10_29" id="rate_agent_dealer_partner_10_29" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_10_29 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">30 - 59 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_30_59" id="rate_agent_dealer_partner_30_59" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_30_59 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">60 - 149 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_60_149" id="rate_agent_dealer_partner_60_149" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_60_149 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">150 - 999 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_150_999" id="rate_agent_dealer_partner_150_999" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_150_999 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">1000 - 4999 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_1000_4999" id="rate_agent_dealer_partner_1000_4999" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_1000_4999 @endphp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">5000 - 10000 (Discount %)</label>
            <div class="col-md-9">
                <input type="text" name="rate_agent_dealer_partner_5000_10000" id="rate_agent_dealer_partner_5000_10000" class="form-control" value="@php if(!empty($row)) echo $row->rate_agent_dealer_partner_5000_10000 @endphp" required>
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

        $(".sub_menu_4").css("display", "block");
        $(".sub_menu_rate_agent").addClass("active")
    });
</script>
@endsection
