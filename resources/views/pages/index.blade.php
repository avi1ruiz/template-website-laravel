@extends('layout.main')

@section('title', 'Hi!')

@section('content')
    <main>
        <div class="home" id="home">
            <p>I am</p>
            <h1>Your name</h1>
            <ul>
                <li>Your skills</li>
            </ul>
        </div>

        <div class="projects" id="projects">
            <h1 class="title-projects">Projects</h1>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <x-slide-element title="" imagedir="" slanguage=""
                            type="" purl="" />
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="repositories" id="repositories">
            <h1 class="repositories-title">Repositories</h1>
            <div class="repo-grid">
                @foreach ($repositories as $repository)
                    <x-repository-element :repository="$repository" />
                @endforeach
            </div>
        </div>

        <div class="contact" id="contact">
            <div class="contact-information">
                <h1>Contact</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quibusdam animi quis repellat saepe
                    consequuntur, commodi soluta modi delectus voluptates asperiores corporis sit atque error quisquam
                    aspernatur vero cumque reprehenderit qui dolores.</p>
                <ul>
                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
            <form action="{{ route('contact') }}" method="post">
                @csrf
                <h1>Contact Form</h1>
                <label for="name">Your name</label>
                <input type="text" name="nameContact">
                {{-- @error('name')
                    <strong>{{$message}}</strong>
                @enderror --}}
                <label for="email">Your email</label>
                <input type="email" name="emailContact">
                {{-- @error('email')
                    <strong>{{$message}}</strong>
                @enderror --}}
                <label for="phone">Your phone</label>
                <input type="tel" name="phoneContact">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="5"></textarea>
                {{-- @error('message')
                    <strong>{{$message}}</strong>
                @enderror --}}
                <button type="submit">Send Message!</button>
            </form>
        </div>
    </main>
@endsection
