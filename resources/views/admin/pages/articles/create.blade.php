@extends('admin.pages.main')
@section('breadcumb','Makale Yönetimi')

@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Makale Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('article.store') }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab"
                                               href="#underline-1" role="tab" aria-controls="underline-1"
                                               aria-selected="true false ">Makaley'e ait Detaylar</a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="tab-content col-6">
                                            <div class="" id="lineTabContent-3">
                                                <div class="tab-pane fade  show active" id="underline-1"
                                                     role="tabpanel"
                                                     aria-labelledby="underline-tab">
                                                    <div class="form-group">
                                                        <p>Makale Başlığı</p>
                                                        <input id="t-text" type="text" name="title"
                                                               class="form-control  @error('title') is-invalid @enderror"
                                                               required placeholder="Makale Başlığı">
                                                        @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="" id="lineTabContent-3">
                                                <div class="tab-pane fade  show active" id="underline-1"
                                                     role="tabpanel"
                                                     aria-labelledby="underline-tab">
                                                    <div class="form-group">
                                                        <p>Makale Slug</p>
                                                        <input id="t-text" type="text" name="slug"
                                                               placeholder="article-slug"
                                                               class="form-control @error('slug') is-invalid @enderror"
                                                               required>
                                                        @error('slug')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group w-50 mb-0">
                                                <p>Kategoriler</p>
                                                <select
                                                    class="form-control @error('category') is-invalid @enderror basic"
                                                    required name="category_id">
                                                    <option value="{{ null }}">Kategori Seçiniz</option>
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="" id="lineTabContent-3">
                                                <div class="tab-pane fade  show active" id="underline-1"
                                                     role="tabpanel"
                                                     aria-labelledby="underline-tab">
                                                    <div class="form-group">
                                                        <p>Makale Yazar</p>
                                                        <input id="t-text" type="text" name="author"
                                                               placeholder="Yazar"
                                                               class="form-control @error('slug') is-invalid @enderror"
                                                               required >
                                                        @error('author')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <p>Makale Yazısı İçeriği</p>
                                                <label>
                                                    <textarea class="summernote"
                                                              name="body"></textarea>
                                                </label>
                                                @error('body')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="widget-content widget-content-area">
                                                <button form="mainForm" type="submit"
                                                        class="btn btn-success btn-lg m-3">
                                                    Kaydet
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tab-content col-6">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Makale Görselleri (600X600)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12 ">
                                                            <div class="custom-file-container"
                                                                 data-upload-id="myFirstImage">
                                                                <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                                                           class="custom-file-container__image-clear"
                                                                                           title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                    <input type="file" form="mainForm" name="image"
                                                                           class="custom-file-container__custom-file__custom-file-input"
                                                                           accept="image/*" required>
                                                                    <span
                                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                                </label>
                                                                <div
                                                                    class="custom-file-container__image-preview"></div>

                                                                @error('image')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
