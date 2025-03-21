@extends('.main')
@push('head')
    <title>Todo List App</title>
@endpush


@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div>
        <a class="btn btn-primary"  href="{{route('todo.home')}}" >Home</a>
        <a class="btn btn-primary"  href="{{route('todo.showAll')}}" >Show All Todos</a>
        <a class="btn btn-primary"  href="{{route('todo.incompleteHome')}}" >Show Incomplete Todos</a>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Todos</a>
        </div>
        <div class="text-danger">
        @error('name')
        {{$message}}
        @enderror
        <br>
        @error('work')
        {{$message}}
        @enderror

        <br>
        @error('date')
        {{$message}}
        @enderror
</div>
        <div class="modal" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark">Add Todo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">

        <div class="">
            <form action="{{route('todo.store')}}" method="post">
                @csrf
            <label for="" class="form-lable mt-4">Name</label>
            <input type="text" name="name" class="form-control">
            <div class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-lable mt-4">Work</label>
            <input type="text" name="work" class="form-control">
            <div class="text-danger">
                @error('work')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-lable mt-4 mb-4">IsComplete</label>
            <div class="input-group">
            <div class="input-group-prepend">
                <input type="radio" aria-label="" name="isComplete" value="1">Completed</input>
                <input type="radio" aria-label="" name="isComplete" value="0">Not Complete</input>
            </div>
            </div>
            <label for="" class="form-lable mt-4 mb-4">Due Date</label>
            <input type="date" name="date" class="form-control">
            <div class="text-danger">
            </div>
            
            
    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button  class="btn btn-primary">Add Todo</button>
            </div>
            </div>
</form>
        </div>
        </div>
    </div>
    <table class="table table-stripped table-dark" id="dataTable">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Delete</th>
            <th>Complete</th>
        </tr>
        @foreach($todo as $task)
        <tr valign='middle'>
            <th>{{$task->name}}</th>
            <th>{{$task->work}}</th>
            <!-- <th>{{$task->isComplete === 1 ? "Complete" : "Not Complete" }}</th> -->
            <th>{{$task->date}}</th>
            <td>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                <div class="modal" id="exampleModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                        <p>Are you sure to delete this task?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a type="button" href="{{route('todo.delete', $task->id)}}" class="btn btn-primary">Yes, delete it!</a>
                    </div>
                    </div>
                </div>
                </div>
            </td>
            <td>
                <input type="checkbox" name="complete" value="{{$task->isComplete}}" onclick="location.href='{{route('todo.markComplete', $task->id)}}'" {{$task->isComplete === 1 ? "checked disabled" : "" }}>C</input>
            </td>
        </tr>
        @endforeach
    </table>
</div>

<script>
    function logSubmit(event) {
        $('#dataTable').load(document.URL +  ' #dataTable tr');
event.preventDefault(); // Prevent the default form submission
}

const form = document.getElementById("form");
const log = document.getElementById("log");
form.addEventListener("submit", logSubmit);


function handleClick(a, b) {
}
</script>
@endsection