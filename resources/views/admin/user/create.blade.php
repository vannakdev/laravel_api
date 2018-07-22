@extends('admin.master')


@section('title','Ceate')

@section('col-size','col-md-8')

@section('boxtitle','Add Users')

@section('content')

            <!-- /.box-header -->
            <!-- form start -->

            <!-- /resources/views/post/create.blade.php -->



            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




            <!-- Create Post Form -->

            <form role="form" action="{{url('system/user')}}" method="post" enctype="multipart/form-data">



                @csrf



                <div class="box-body">

                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control"  placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input name="confirmPassword" type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
                    </div>


                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <option>Admin</option>
                            <option>Report</option>

                        </select>
                    </div>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input name="phone" type="text" class="form-control" placeholder="Phone" >
                    </div>



                    <div class="form-group">
                        <label for="exampleInputFile">Profile</label>
                        <input name="profile" type="file" id="exampleInputFile">


                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
            </form>
        </div>

        </div>

        <div class="col-md-4"></div>
    </div>




    @stop