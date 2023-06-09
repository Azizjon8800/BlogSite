@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирования категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Редактирования категории</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="w-50">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Название категории" value="{{ $category->title }}">
                        @error('title')
                            <div class="text-danger">это поле необходимо для заполнения</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>
        </div>
      </div>
    </section>

  </div>
  @endsection
