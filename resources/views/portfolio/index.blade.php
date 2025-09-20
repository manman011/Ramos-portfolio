@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section id="portfolio" class="hero-section">

    <div class="container">

       <div class="section-container">
            <div>
                <img src="./image/romanRamos.jpg" alt="{{ $portfolio['name'] }}" class="profile-img">
            </div>
            <div>
                <h1 style ="color: #dac9c7b; font-weight: 300;" >Hello <span class="span-im" >I'm</span></h1>
                <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

                <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

                <p class="lead mb-4">{{ $portfolio['bio'] }}</p>
            </div>
       </div>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">
<h2 class="section-title" id="boxAbout">About Me</h2>
  
    <div class="container">
        
        <div class="section-container">           
               <div class ="boxRoman">
                 <div> <img src="./image/roman.jpg" class ="aboutImage" ></div>
               </div>
                 <div class="Paragraph-box">
                        <p> I’m a front-end developer who specializes in building responsive
                            and accessible user interfaces. I enjoy simplifying complex challenges
                            through thoughtful, functional design. I work well in collaborative settings 
                            and pay close attention to visual and code quality. I’m always exploring modern
                            tools and techniques to enhance the user experience.</p>
                </div>
        </div>
        <!-- <h6 style="color: light red; font-size: 30px">Skills:</h6>
                @foreach($portfolio['skills'] as $skill)
                    <p> {{ $skill }}</p>
                @endforeach -->
        <!-- About content -->

    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title" id="boxAbout" >My Projects</h2>
        <div class="projects-section">
            
             <ul class="project-list">
            @foreach($portfolio['projects'] as $project)
                <li class="project-card">
                    <p><strong>Name:</strong> {{ $project['name'] }}</p>
                    <p><strong>Stack:</strong> {{ $project['stack'] }}</p>
                    <p><strong>Status:</strong> <span class="S_status">{{ $project['status'] }}</span></p>
                </li>
            @endforeach
        </ul>
        </div>
       
        <!-- Projects content -->

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="contact-section" >
        <h2 class="section-title" id="boxAbout">Contact</h2>

        <div class="projects-section">
            <ul class="project-list">
                @foreach($portfolio['contact'] as $key => $value)
                    @if(is_array($value))
                        <li class="project-card">
                            @foreach($value as $item)
                                <p>{{ $item }}</p>
                            @endforeach
                        </li>
                    @else
                        <li >
                            <p>{{ $value }}</p>
                        </li>
                    @endif
                @endforeach
             </ul>
        </div>
        <!-- <div class="aboutSelf">
                @foreach($portfolio['about'] as $key => $value)
                    <p><strong>{{ $key}}</strong> {{ $value }}</p>
                @endforeach
            </div> -->
    </div>
        <!-- Contact content -->

    </div>

</section>

@endsection