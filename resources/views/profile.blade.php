@include('shared.header')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <section style="background-color: #eee;">
                        <div class="container py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <img src="{{asset('images/no-pic.png')}}" alt="avatar"
                                                 class="rounded-circle bg-dark img-fluid" style="width: 150px;">

                                            <div class="row justify-content-center p-2">
                                                <a href="javascript:void(0)" id="uploadPicture" class="text-lg text-bold"
                                                   data-toggle="modal" data-target="#ProfilePicModal">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                            </div>

                                            <h5 class="my-3">{{$user->name}}</h5>
                                            <p class="text-muted mb-1">{{$user->email}}</p>
                                            <div class="d-flex justify-content-center mb-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Mobile Number</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Address</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-success"
                                                       data-toggle="modal" data-target="#proInfoModal"><i
                                                            class="fa fa-edit"></i> Edit Profile Info</a>
                                                </div>
                                                <div class="col-sm-9"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!--Update Profile Pic Modal -->
    <div class="modal fade" id="ProfilePicModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-dark">
                <div class="modal-header bg-light">
                    <h2 class="card-title">Update Profile Picture</h2>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <img src="{{asset('images')}}/no_pic.png" alt="avatar"
                                     class="rounded-circle bg-dark img-fluid" style="width: 150px;">
                            </div>
                            <div class="col-md-6">
                                <form id="avatar-form" enctype="multipart/form-data" action="{{route('update-picture')}}"
                                      method="POST">
                                    @csrf
                                    <div class="card-body text-center">
                                        {{--                                        TODO--}}
                                        <input type="hidden" name="userId" value="">
                                        <div class="row pt-3 justify-content-center">
                                            <input id="picture" type="file" name="picture"
                                                   class="form-control-sm text-bg-dark">
                                        </div>
                                    </div>
                                    <div class="card-body py-2 text-center">
                                        <button type="submit" class="btn btn-sm btn-success p-1">Save Picture</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Update Profile Info Modal -->
    <div class="modal fade" id="proInfoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-dark">
                <div class="modal-header bg-light">
                    <h2 class="card-title">Update Profile Info</h2>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form id="info-form" enctype="multipart/form-data" action="{{route('update-info')}}"
                              method="POST">
                            @csrf
                            {{--                            todo--}}
                            <input type="hidden" name="userId" value="">
                            <div class="row ">
                                <div class="col-sm-4 ">
                                    <p class="mb-0">Mobile Number</p>
                                </div>
                                <div class="col-sm-8 pull-right">
                                    <input type="text" class="form-control" name="mobile" id="mobile" value="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-8">
                                    {{--                                    TODO--}}
                                    <input type="text" class="form-control" name="address" id="address" value="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-success">Save Profile Info Update</button>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@include('shared.footer')
