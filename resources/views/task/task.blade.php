@extends('layouts.master')
@section('content')

<!--Page Wrap-->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Tasks</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Task</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_task"><i class="fa fa-plus"></i> Add Task</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Search Filter -->
        <form action="{{ route('all/employee/search') }}" method="POST">
                @csrf
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-4">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="employee_id">
                            <label class="focus-label">Task Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="name">
                            <label class="focus-label">Employee Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">  
                        <button type="sumit" class="btn btn-success btn-block"> Search </button>  
                    </div>
                </div>
            </form>
            <!-- Search Filter -->

            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Task Name</th>
                                    <th>User Name</th>
                                    <th hidden></th>
                                    <th>Task Description</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Task Modal -->
        <div id="add_task" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="{{ route('task') }}" method="POST">
                        @csrf
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>Task Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="task_name" name="task_name" value="{{ old('name') }}" placeholder="Enter Task Name">
                                </div>
                            </div>
                            <div class="col-sm-6"> 
                                <label class="col-form-label">Employee Name</label>
                                    
                                <select class="select select2s-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" id="employee_name" name="name">
                                <option value="">-- Select --</option>
                                @foreach ($employee as $key=>$user )
                                    <option value="{{ $user->name }}" data-department={{ $user->department }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <label class="col-form-label">Department</label>
                                <input class="form-control" type="email" id="department" name="email" placeholder="Auto email" readonly>
                            </div>
                                
                            <div class="col-sm-6"> 
                                <label>Worth of Task</label>
                                <select id="worth_of_task" name="worth_of_task"class="select">
                                    <option selected disabled> --Select --</option>
                                    <option>Low</option>
                                    <option>Medium</option>
                                    <option>Hight</option>
                                </select>
                            </div>
                        </div>
                            
                        <br>
                            
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>From <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" id="starting_date" name="starting_date">
                            </div>
                                </div>
                            </div>

                            <div class="col-sm-6"> 
                                <label>To</label>
                                <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" id="ending_date" name="ending_date">
                            </div>
                            </div>
                                
                        </div>
                            
                            <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control" id="task_description" name="leave_reason"></textarea>
                            </div>
                            
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Model -->
    </div>
</div>
@section('script')
<script>
        // select auto email
        $('#employee_name').on('change',function()
        {
            $('#department').val($(this).find(':selected').data('department'));
        });
    </script>
@endsection
@endsection