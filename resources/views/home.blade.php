@extends('layouts.app')
@section('content')
<div class="main-slider slicker">

    <div>
        <div class="slider-item" style="background-image:url('/img/slider1.jpg')">
            <div class="overlay"></div>
            <div class="content">
                <span class="category">Latest News</span>
                <h1 class="title">AAAEA - Capital Area 2019 Executive Board</h1>
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, ipsam. Placeat dolore
                    maxime
                    voluptate? Quisquam quia odio in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
                    ipsam. Placeat dolore maxime
                    voluptate? Quisquam quia odio in!</p>
                <div class="ta-r"><a href="#" class="btn1">Continue Reading</a></div>
            </div>
        </div>
    </div>


</div>
<div class="slider-tri"><img src="/img/tri.svg"></div>

<h1 class="page-title"><span>Latest News</span></h1>

<div class="news masonry" id="demo-grid">
@foreach($posts as $post)
    <div>
        <a href="#" class="news-item">
            <div class="img" style="background-image: url('/img/news1.jpg');"></div>
            <div class="views-box">
                <span>
                    <img src="/img/eye.svg" alt="">
                    <b>25</b>
                </span>
                &nbsp;&nbsp;
                <span>
                    <img src="/img/comment.svg" alt="">
                    <b>15</b>
                </span>
            </div>
            <div class="content">
                <span class="date">2020/05/05 06:06 PM</span>
                <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sunt quibusdam facilis
                    eveniet voluptatum est illum officia.</p>
                <hr>
                <div class="footer">
                    <span class="read">
                        <b>Continue Reading</b>
                        <img src="/img/next.svg">
                    </span>
                </div>
            </div>
            <div class="comment-box">
                <div class="profile-img" style="background-image: url('/img/user.svg');"></div>
                <div class="profile-content">
                    <span class="name">Name Here</span>
                    <p class="cmnt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis.</p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection