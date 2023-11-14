<div>
    <section>
        @include('livewire.student-create')
        @include('livewire.student-update')
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>All Students
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                                            Add Student
                                        </button>
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Search..." class="form-control" wire:model="search">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->first_name }}</td>
                                            <td>{{ $student->last_name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateStudentModal" wire:click.prevent="edit({{ $student->id }})">Edit</button>
                                                <button class="btn btn-danger btn-sm"  wire:click.prevent="delete({{ $student->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
