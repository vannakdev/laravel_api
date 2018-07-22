@extends('admin.master')


@section('title','List-User')

@section('col-size','col-md-12')

@section('boxtitle','List Users')

@section('content')






                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="app-table" class="table table-hover">



                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Profile</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Role</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Phone</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($users as $items)


                                        <tr role="row" class="even">
                                            <td class="">{{$loop->iteration}}</td>
                                            <td class="">{{$items->name}}</td>
                                            <td class="">{{$items->email}}</td>
                                            <td class=""><img src="/{{$items->profile}}" height="60"></td>
                                            <td class="">{{$items->role}}</td>
                                            <td class="">{{$items->phone}}</td>
                                            <td class="">Chage Password</td>
                                        </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                    </div>



    @endsection