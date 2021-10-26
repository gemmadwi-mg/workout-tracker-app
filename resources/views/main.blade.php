@extends('layouts.home')

@section('container')


    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Welcome to Workout</div>
                <div class="intro-lead-in">Your body.</div>
                <div class="intro-lead-in">Your workouts.</div>
                <div class="intro-lead-in">Your data.</div>
                <div class="intro-lead-in">Your progress.</div>
                
                
                <a href="/register" class="page-scroll btn btn-xl" style="margin-top: 1em;">
                    Register
                </a>
               

                <a href="/login" class="page-scroll btn btn-xl" style="margin-top: 1em;">
                    Login
                </a>
                
            </div>
        </div>
    </header>

    <section id="services" class="bg-darkest-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-light">Your advantages</h2>
                    <h3 class="section-subheading text-muted">
                        
                            wger Workout Manager is a free, open source web application that manages
                            your exercises, workouts and nutrition. It started as a pet project of
                            mine to replace my growing collection of different spreadsheets, but it
                            has become something other people could also find useful.
                     
                    </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="{% fa_class 'circle' %} fa-stack-2x text-primary"></i>
                        <i class="{% fa_class 'user' %} fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading text-light">Workouts</h4>
                    <p class="text-muted">
                        
                            You can create and manage flexible workout routines for any goals you
                            have. Select exactly which exercises you'll do and how many repetitions,
                            time or distance you want to do them. You can also combine different
                            workouts into a schedule.
                        
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="{% fa_class 'circle' %} fa-stack-2x text-primary"></i>
                        <i class="{% fa_class 'utensils' %} fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading text-light">Nutrition</h4>
                    <p class="text-muted">
                     
                            Create your personal diet plan by creating as many meals with as many
                            different ingredients as you need. The application will calculate the
                            nutritional values (total energy, protein, carbohydrates, and so on)
                            about the whole plan as well as the indivual meals.
                       
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-class-circle fa-stack-2x text-primary"></i>
                        <i class="{% fa_class 'chart-line' %} fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading text-light">Diary</h4>
                    <p class="text-muted">
                       
                            Enter the weights and repetitions you did for each exercise to generate
                            diagrams that let you see at a glance how well you are doing. The raw
                            numbers are of course still accessible.
                        
                      You can also enter notes and a general impression (great, neutral, etc.)
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <h3 class="section-subheading text-muted">Among many others</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-fluid rounded-circle" src="images/weight-chart.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Weight tracker</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        
                                            Keep track of your progress with the body weight chart. This makes
                                            it easy to see if you are reaching your goals or need to adjust
                                            something.
                                        
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-fluid rounded-circle" src="images/calendar.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                       
                                            Get an overview of how and when you trained as well as how you
                                            personally felt you performed. Access all your individual diary
                                            entries with one click.
                                        
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline">
                            <div class="timeline-image">
                                <img class="img-fluid rounded-circle" src="images/muscle-overview.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>translate 'Exercise database</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                       
                                            The exercise database contains more than hundred exercises from
                                            which you can choose when creating a workout. You can view them by
                                            category and equipment used or muscles trained.
                                       
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-fluid rounded-circle" src="images/gym-management.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Gym management</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                       
                                            Use the application for your gym to manage its members, their
                                            workouts and attendance. You can manage the members' contracts,
                                            keep notes and upload any files you might need.
                                       
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline">
                            <div class="timeline-image">
                                <img class="img-fluid rounded-circle" src="images/rest-api.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>REST API</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        
                                            wger provides a REST API with full read and write access to all
                                            data so you can integrate your own application and tools.
                                        
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline">
                            <div class="timeline-image">
                                <h4>100% Free
                                    <br>and
                                    <br>Open Source
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




@endsection