@extends('layouts.back_base')
@section('content')

<div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">Añadir nueva Card</h3>
            </div>
        </div>
    </div>
    <div class="m-content">
        <div class="row">
            <div class="col-lg-9">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Contenido
                                </h3>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('b_saveCard')}}" method="POST" class="m-form" enctype="multipart/form-data">
                        @csrf
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
                                    <label for="">Cuerpo del Card</label>
                                    <textarea name="body" id="ckeditor"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Clasificación
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-form">
                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-sm-6">Estado</label>
                                    <div class="">
                                        <input data-switch="true" name="status" type="checkbox" checked="checked" data-on-text="True" data-off-text="False" data-on-color="success">
                                    </div>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="">Categoría</label>
                                    <select name="category" class="form-control m-input">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="">Foto de portada</label>
                                    <div class="custom-file">
                                        <input type="file" name="media" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Subir imagen</label>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



@endsection

@push('add_js')
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/bo/demo/custom/crud/forms/widgets/bootstrap-switch.js')}}" type="text/javascript"></script>
@endpush

@push('add_scripts')
    <script>
        CKEDITOR.replace ( 'ckeditor' );

    </script>
@endpush