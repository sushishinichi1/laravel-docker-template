@extends('layouts.base')@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
      <div class="card">
          <div class="card-header">
              ToDo
          </div>
          <div class="card-body">
              <form method="POST" action="{{ route('todo.update', $todo->id) }}">
                  @csrf@method('PUT')
                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">
                          ToDo
                      </label>
                      <div class="col-md-6">
                          <input type="text"
                              class="form-control @if ($errors->has('content')) border-danger @endif"
                              name="content" value="{{ $todo->content }}">
                          @if ($errors->has('content'))
                              <span class="text-danger">
                                  {{ $errors->first('content') }}
                              </span>
                          @endif
                          </input>
                      </div>
                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                              </button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection
