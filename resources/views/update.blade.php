@extends('.main')
@push('head')
    <title>Update Todo</title>
@endpush


@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Update Todos</div>
        <a href="" class="btn btn-primary">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
            <label for="" class="form-lable mt-4">Name</label>
            <input type="text" class="form-control">
            <label for="" class="form-lable mt-4">Work</label>
            <input type="text" class="form-control">
            <label for="" class="form-lable mt-4">Due Date</label>
            <input type="date" class="form-control">
            <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
            </form>
        </div>
    </div>
</div>
@endsection