@extends('layouts.back_base')
@section('content')
<style>
header,#m_aside_left{
    display: none !important;
}
</style>
<form action="{{route('b_saveCard')}}" method="post">
    @csrf
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">Sizing</label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <input data-switch="true" data-size="small" type="checkbox" checked="checked">
                <input data-switch="true" type="checkbox" checked="checked">
                <input data-switch="true" data-size="large" type="checkbox" checked="checked">
            </div>
        </div>
    </div>
    <textarea name="textarea" id="ckeditor"></textarea>
    <input type="submit">
</form>

<p>
    {!!$card->body!!}
</p>

@endsection

@push('add_js')
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('add_scripts')
    <script>
        CKEDITOR.replace ( 'ckeditor' );

    </script>
@endpush