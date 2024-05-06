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
                                            <img src="{{asset('images/no-pic.png')}}" alt="avatar" class="rounded-circle bg-dark img-fluid" style="width: 150px;">

                                            <div class="row justify-content-center p-2">
                                                <a href="javascript:void(0)" id="upload_pic" class="text-lg text-bold" data-toggle="modal" data-target="#ProfilePicModal">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                            </div>

                                            <h5 class="my-3">{{$userinfo->name}}</h5>
                                            <p class="text-muted mb-1">{{$userinfo->email}}</p>
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
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-success" data-toggle="modal" data-target="#proInfoModal"><i class="fa fa-edit"></i> Edit Profile Info</a>
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
</section>>
