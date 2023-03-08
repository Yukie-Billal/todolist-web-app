@extends('App')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card border-0">
                <div class="card-body border-0">
                    Selamat Datang Di Aplikasi <code class="mx-3">Todo list</code>, {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3 mb-4">
        <div class="col-9">
            <button class="btn btn-secondary py-1 shadow-sm px-4" data-bs-toggle="modal" data-bs-target="#todoCreate">
                <i class="fas fa-plus me-1 fs-6"></i>
                <span class="fw-semibold fs-6">Buat Baru</span>
            </button>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="col-4 mb-2">
                <div class="card border-0">
                    <div class="card-body border-0 py-2">
                        Daftar <code class="mx-2">Todo list</code>
                    </div>
                </div>
            </div>
            @foreach ($todos as $todo)
                <div class="alert alert-primary my-2 d-flex flex-column" role="alert">
                    <strong class="fs-5 mb-3">{{ $todo->judul }}</strong>
                    <strong class="ms-2">{{ $todo->isi }}</strong>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Modal Create-->
    <div class="modal fade" id="todoCreate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="col-12 d-flex justify-content-end">
            <button type="button" class="close bg-transparent border-0 fs-3 fw-bold text-white" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/todo-lists" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-12 text-center">
                                <h3>Buat Todo Baru</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="title">Judul Todo</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Judul Todo Anda" value="{{ old('title') }}">
                                    @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group my-3">
                                    <label for="body">Isi Todo</label>
                                    <textarea class="form-control" name="body" id="body" rows="3">{{ old('body') }}</textarea>
                                    @error('body')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        <div class="col-10 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"  data-bs-dismiss="modal">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection