@extends('layouts.admin')
@section('title','Paket Travel')
@section('content')
    <!-- Main Content -->
    <div id="content">

        @include('includes.admin.navbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
            </div>

            @if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

            
		    <div class="row ">
		        <div class="col-lg">
		            <div class="card mt-2 mx-auto p-4 bg-light">
		                <div class="card-body bg-light">
		                    <div class="container">
		                        <form id="contact-form" role="form" action="{{ route('travel-package.update', $item->id) }}" method="post">
		                        	@method('PUT')
		                        	@csrf
		                            <div class="controls">
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group"> <label for="title">Title</label> <input id="title" type="text" name="title" class="form-control" required="required" data-error="Title is required." value="{{ $item->title }}">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group"> <label for="location">Location</label> <input id="location" type="text" name="location" class="form-control" required="required" data-error="Location is required." value="{{ $item->location }}">
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group"> <label for="featured_event">Featured Event</label> <input id="featured_event" type="text" name="featured_event" class="form-control" required="required" data-error="Featured event is required." value="{{ $item->featured_event }}">
		                                        </div>
		                                    </div>
		                                     <div class="col-md-6">
		                                        <div class="form-group"> <label for="language">Language</label> <input id="language" type="text" name="language" class="form-control"required="required" data-error="Language is required." value="{{ $item->language }}"> </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group"> <label for="departure_date">Departure Date</label> <input id="departure_date" type="date" name="departure_date" class="form-control" required="required" data-error="Departure date is required." value="{{ $item->departure_date }}">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group"> <label for="duration">Duration</label> <input id="duration" type="text" name="duration" class="form-control" required="required" data-error="Duration is required." value="{{ $item->duration }}"> </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                	<div class="col-md-6">
		                                        <div class="form-group"> <label for="type">Type</label> <input id="type" type="text" name="type" class="form-control" equired="required" data-error="Type is required." value="{{ $item->type }}">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group"> <label for="price">Price</label> <input id="price" type="number" name="price" class="form-control" required="required" data-error="Price is required." value="{{ $item->price }}"> </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                	<div class="col-md-6">
		                                        <div class="form-group"> <label for="foods">Foods</label> <input id="foods" foods="text" name="foods" class="form-control" required="required" data-error="Foods is required." value="{{ $item->foods }}">
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-12">
		                                        <div class="form-group"> <label for="about">About</label> <textarea id="about" name="about" class="form-control" rows="4" required="required" data-error="About is required." value="{{ $item->about }}"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Ubah">
		                                    </div>
		                                </div>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div> <!-- /.8 -->
		        </div> <!-- /.row-->
		    </div>
					



            

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection