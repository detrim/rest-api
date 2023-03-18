@extends('layout.app')
@extends('layout.navbar')
@section('title', 'Rest Api')
@section('content')
    <div class="content-wrapper" style="margin-bottom: 400px;">

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="30">
                                            No
                                        </th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $usr)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $usr->name }}</td>
                                            <td>{{ $usr->email }}</td>
                                            <td>
                                                <a type="button" class="btn btn-outline-info btn-rounded "
                                                    data-bs-toggle="modal" data-bs-target="#key{{ $usr->id }}">
                                                    Update</a>

                                                {{-- start modal --}}
                                                <div class="modal fade" id="key{{ $usr->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <form action="{{ url('user/' . $usr->id . '/update') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @method('patch')
                                                                    @csrf
                                                                    <div class="text-center">
                                                                        <h3 class="modal-title mb-3" id="exampleModalLabel">
                                                                            UPDATE</h3>
                                                                    </div>
                                                                    <div class="text-center mt-1 mb-1">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-12">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="name"
                                                                                        class="form-control "
                                                                                        placeholder="Nama" required>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-12">
                                                                                <div class="input-group">
                                                                                    <input type="email" name="email"
                                                                                        class="form-control "
                                                                                        placeholder="Email" required>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-12">
                                                                                <div class="input-group">
                                                                                    <input type="password" name="password"
                                                                                        class="form-control " id="password"
                                                                                        placeholder="Password" required>
                                                                                    <div
                                                                                        class="input-group-prepend bg-transparent">
                                                                                        <span
                                                                                            class="input-group-text bg-transparent border-right-0">
                                                                                            <input type="checkbox"
                                                                                                class="py-1 my-1"
                                                                                                onclick="myFunction()">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-success">Yes</button>
                                                                        <button type="button" class="btn btn-light"
                                                                            data-bs-dismiss="modal">No</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end modal --}}

                                                <a type="button" class="btn btn-outline-danger btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target="#delete{{ $usr->id }}">
                                                    Delete</a>

                                                {{-- start modal --}}
                                                <div class="modal fade" id="delete{{ $usr->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <form action="{{ url('user/' . $usr->id . '/destroy') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <div class="text-center">
                                                                        <h3 class="modal-title" id="exampleModalLabel">
                                                                            DELETE</h3>
                                                                        <i
                                                                            class="icon-lg mdi mdi-alert-circle text-danger ml-auto"></i>
                                                                    </div>
                                                                    <div class="text-center mt-1 mb-1">

                                                                        <small>Apakah
                                                                            anda yakin ingin menghapus data <br> atas
                                                                            nama
                                                                            {{ $usr->name }}</small>
                                                                    </div>
                                                                    <br>
                                                                    <div class="text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-success">Yes</button>
                                                                        <button type="button" class="btn btn-light"
                                                                            data-bs-dismiss="modal">No</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end modal --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{ $user->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
