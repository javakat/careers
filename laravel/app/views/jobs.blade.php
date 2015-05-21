@extends('layouts.master')

@section('title')
Tiger Recruiting Link
@endsection

@section('mainHeading')
Career Center
@endsection

@section('subHeading')
@endsection

@section('navbar')
    <ul>
        <li><a href="http://www.auburn.edu/career/students/">Career Center</a></li>
        <li><a href="http://www.auburn.edu/career/alumni/">College of Business</a></li>
    </ul>
@endsection

@section('banner')
    <form class="slider login" method="post" action="https://auburn-csm.symplicity.com/students/index.php">
        <div class="login-wrap">
            <h2 class="login-title">Sign in to <a href="http://jobs.auburn.edu" class="trl"></a></h2>
            <p class="login-description">Your link to jobs, interviews and employers.</p>
            <div class="input-group login-username">
                <span class="input-group-addon input-group-addon-md"><i class="fa fa-user"></i></span>
                <input type="text" name="username" class="form-control input-md" placeholder="Student Username">
            </div>
            <div class="input-group login-password">
                <span class="input-group-addon input-group-addon-md"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" class="form-control input-md" placeholder="Password">
            </div>
            <div class="flex flex--login">
                <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/jobs/trl.html" class="btn btn-default btn-md login-button">Sign up</a>
                <button type="submit" class="btn btn-default btn-md login-button login-button--active">Sign in</button>
            </div>
        </div>
    </form>
    <div class="slider blanker">
        <div class="blanker-wrap">
            <h2><a href="http://www.auburn.edu/career/events/">Upcoming Events</a></h2>
            <ul>
                <li class="event">
                    <div class="event-date">
                        <div class="event-date-month">FEB</div>
                        <div class="event-date-day">11</div>
                    </div>
                    <div class="event-details">
                        <div class="event-details-name">Engineering &amp; Technical Career Expo</div>
                        <div class="event-details-location">The Hotel at Auburn University and Dixon Conference Center</div>
                        <div class="event-details-time">3 PM - 7 PM</div>
                    </div>
                </li>
                <li class="event">
                    <div class="event-date">
                        <div class="event-date-month">FEB</div>
                        <div class="event-date-day">17</div>
                    </div>
                    <div class="event-details">
                        <div class="event-details-name">Using Your Major | Panel Discussion | Government</div>
                        <div class="event-details-location">Student Center, Room 2107</div>
                        <div class="event-details-time">12 PM - 1 PM</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('inbetween')
    <div class="between">
        <img src="assets/jobs-handbook.png" alt="Interview Prep" />
    </div>
    <div class="between">
        <img src="assets/jobs-interview.png" alt="Interview Prep" />
    </div>
    <div class="between">
        <img src="assets/jobs-salary.png" alt="Interview Prep" />
    </div>
    <div class="between small-text">
        <p>Your résumé will be reviewed in TRL by a staff member before it can be used in applications.</p>
        <p>Résumé reviews take 1-2 business days from time of upload and are conducted M-F 7:45 am - 4:45 pm.</p>
        <p>Please do not upload multiple copies of your résumé for review.</p>
    </div>
@endsection

@section('body')
    <h2>This is <span class="path-title">Teaching <i class="fa fa-chevron-down"></i></span></h2>
<div class="modal-body">
    <div class="career flex">
        <div class="career-block">
            <i class="fa fa-leaf"></i>
            <h3 class="career-title">Agriculture</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-pencil"></i> 
            <h3 class="career-title">Architecture, Design and Construction</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-briefcase"></i>
            <h3 class="career-title">Business</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-book"></i>   
            <h3 class="career-title">Education</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-wrench"></i>
            <h3 class="career-title">Engineering</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-bug"></i>
            <h3 class="career-title">Forestry and Wildlife Sciences</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-group"></i>
            <h3 class="career-title">Human Sciences</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-globe"></i>
            <h3 class="career-title">Liberal Arts</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-book"></i>
            <h3 class="career-title">Library</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-user-md"></i>
            <h3 class="career-title">Nursing</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-stethoscope"></i>
            <h3 class="career-title">Pharmacy</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-flask"></i>
            <h3 class="career-title">Sciences and Mathematics</h3>
        </div>
        <div class="career-block">
            <i class="fa fa-medkit"></i>
            <h3 class="career-title">Veterinary Medicine</h3>
        </div>
    </div>
    <div class="path flex">
        <div class="path-block">
            Dramatically visualize customer directed convergence without revolutionary ROI.
        </div>
        <div class="path-block">
            Dramatically maintain clicks-and-mortar solutions without functional solutions.
        </div>
        <div class="path-block">
            Dynamically innovate resource-leveling customer service for state of the art customer service.
        </div>
        <div class="path-block">
            Holisticly predominate extensible testing procedures for reliable supply chains.
        </div>
        <div class="path-block">
            Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.
        </div>
        <div class="path-block">
            Quickly maximize timely deliverables for real-time schemas.
        </div>
    </div>
@endsection

@section('banner-bottom')
@endsection