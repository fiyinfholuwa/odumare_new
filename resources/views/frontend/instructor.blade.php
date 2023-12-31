@extends('frontend.app')
@section('title')
Instructor
@endsection
@section('content')

<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Join Our Team</h2>
                        </div>
                        <div class="col-12">
                            <a style="color: #fff;" href="{{route('home')}}">Home</a>
                            <a style="color: #fff;" href="#">Become an Instructor</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Start -->
            <div style="margin-top: -30px" class="contact">
                <div class="container">
                    <div class="row">
                        <div id="image_top" class="col-md-6 col-lg-6" style="background-image: url('https://images.shiksha.com/mediadata/ugcDocuments/images/wordpressImages/2020_05_software-development-i1.jpg'); background-size: cover;"  >
                            <div   class="contact-info">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <h3 style="padding: 20px 2px; color:navy">Join Our Team of Experts</h3>
                                <p style="color:navy;">Ignite Minds and Inspire Others. Become an Instructor with Us Today!</p>
                                <div id="success"></div>
                                <form method="post" action="{{route('instructor.add')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="control-group">
                                        <input  type="text" class="form-control" name="first_name" id="firstname" placeholder="First Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="control-group">
                                        <!-- <label for="gender">Gender</label> <br> -->
                                        <select  required name="gender" id="gender">
                                            <option value="">--Select Gender--</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="prefered not to say">Prefered Not to Say</option>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                    </div>


                                    <div class="control-group">
                                        <!-- <label for="gender">Gender</label> <br> -->
                                        <select required name="career" id="gender">
                                            <option value="">--Level of Career--</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermidiate">Intermidiate</option>
                                            <option value="Professional">Professional</option>

                                        </select>
                                        <p class="help-block text-danger"></p>
                                    </div>


                                    <div class="control-group">
                                        <select required name="course_ids[]" id="course_ids">
                                            <option value="">--Choose from Available Courses--</option>
                                            @if(count($courses) > 0)
                                            @foreach($courses as $course)
                                            <option value="{{$course->title}}">{{$course->title}}</option>
                                            @endforeach
                                            @else
                                            <option value="" selected>No Course Available</option>
                                            @endif
                                        </select>
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="control-group">
                                        <span>Upload Your CV</span>
                                        <br>
                                        <input required type="file" name="resume" accept=".pdf" id="fileUpload" >
                                    </div>

                                    <div class="control-group">
                                        <input type="checkbox" required name="checkbox" id="checkbox">
                                        <label for="file" style="font-size: 12px;  font-style: italic;">Subscribe to our mail list</label>
                                    </div>


                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
    <style>
        @media (max-width: 425px){
            #image_top{
                height: 300px;
                margin-top: -50px;
            }
        }
    </style>

@endsection
