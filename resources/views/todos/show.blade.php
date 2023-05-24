@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form action="{{ route('todos-update', ['id' => $todo->id]) }}" method="POST">
            @method('PATCH')
            @csrf

            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <div class="my-3">
                <label for="title" class="form-label">Tíutlo de la tarea</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $todo->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
        </form>
    </div>
@endsection
