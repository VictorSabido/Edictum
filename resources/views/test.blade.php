@extends('layouts.back_base')
@section('content')
{{route('b_saveCard')}}

<div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">Dashboard</h3>
            </div>
        </div>
    </div>
    <div class="m-content">
        <div class="row">
            <div class="col-lg-9">
                <!--begin::Portlet-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Añadir nueva card
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="m-form">
                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">
                                <div class="form-group m-form__group">
                                    <label for="">Título</label>
                                    <input type="text" name="title" class="form-control m-input" placeholder="Introducce el título">
                                </div>
                                <div class="form-group m-form__group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" class="form-control m-input" placeholder="Introducce el slug /xxxxx-xxx">
                                    <span class="m-form__help">victorsabido.com/slug</span>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="">Default Select</label>
                                    <select name="category" class="form-control m-input">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Communication:</label>
                                    <div class="m-checkbox-list">
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Email
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> SMS
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Phone
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group m-form__group">
                                    <label for="">Foto de portada</label>
                                    <div></div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <textarea name="textarea" id="ckeditor"></textarea>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <button type="reset" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>



@endsection

@push('add_js')
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('add_scripts')
    <script>
        CKEDITOR.replace ( 'ckeditor' );

    </script>
@endpush