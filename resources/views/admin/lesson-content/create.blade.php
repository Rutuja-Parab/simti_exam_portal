@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Create Lesson</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf

                        <div class="form-floating mb-3">
                            <select class="form-select" name="languageId">
                                <option disabled selected>Select</option>
                                @foreach($languages as $language)
                                    <option value="{{$language->id}}">{{$language->title}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Language</label>
                        </div>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="file">
                            <label class="input-group-text" for="inputGroupFile02">Audio File</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <label for="floatingFirst">Title</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="typeId">
                                <option disabled selected>Select</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Category</label>
                        </div>

                        <textarea id="ckeditor" name="content"></textarea>

                        <input type="hidden" name="ck_editor" value="1">

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{route('admin.lesson-content.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>Create Lesson</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>

    <script>
        const actionUrl = '{{route('admin.lesson-content.store')}}';
        const backUrl = '{{route('admin.lesson-content.index')}}';
    </script>
    @include('partials.script')
@endsection
