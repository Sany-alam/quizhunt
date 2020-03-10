@extends('app')
@section('content')

<div class="card py-5 m-5">
    <div class="container">
        <div class="card-header">
            <div class="container">
                <h3 class="text-center my-4">Add question</h3>
                <div class="form-group">
                    <input id="question" placeholder="Question" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <input id="option1" placeholder="Option 1" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <input id="option2" placeholder="Option 2" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <input id="option3" placeholder="Option 3" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <input id="option4" placeholder="Option 4" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <select id="coption" class="form-control custom">
                        <option value="">Select correct option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                </div>
                <div class="form-group text-right">
                    <button id="addQuestion" class="btn btn-primary">Post</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>#no</th>
                            <th>Question</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Correct option</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="question-rows">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection