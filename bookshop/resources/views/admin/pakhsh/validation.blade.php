@extends('admin.pakhsh.create')
@section('validation')
    <div class="panel-body">
        <div class="alert alert-danger alert-dismissable ">
            <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
            {{ $errors->first('name_pakhsh') }}
        </div>
    </div>
    @endif
    @if ($errors->has('phone_pakhsh'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('phone_pakhsh') }}
            </div>
        </div>
    @endif
    @if ($errors->has('fax_pakhsh'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('fax_pakhsh') }}
            </div>
        </div>
    @endif
    @if ($errors->has('email_pakhsh'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('email_pakhsh') }}
            </div>
        </div>
    @endif
    @if ($errors->has('website_pakhsh'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('website_pakhsh') }}
            </div>
        </div>
    @endif
    @if ($errors->has('address_pakhsh'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('address_pakhsh') }}
            </div>
        </div>
    @endif
    @if ($errors->has('details_pakhsh'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" date-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('details_pakhsh') }}
            </div>
        </div>
    @endif
@endsection
