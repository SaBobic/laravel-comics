@extends('layouts.master')

@section('main-content')

<div class="divider bg-primary">
    <div class="container">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
    </div>
</div>

<div class="container d-flex">
    <div class="comic-info">
        <h1 class="title">ACTION COMICS #1000: THE DELUCE EDITION</h1>
        <div class="price d-flex justify-between">
            <div class="d-flex justify-between">
                <div>U.S. Price: $19.99</div>
                <div>AVAILABLE</div>
            </div>
            <div>Check Availability</div>
        </div>
        <p class="description">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
    </div>
    <aside>
        <div>ADVERTISEMENT</div>
        <img src="{{ asset('/img/adv.jpg') }}" alt="">
    </aside>
</div>

<div>
    <div class="container d-flex justify-between">
        <div>
            <h3>Talent</h3>
            <div class="d-flex">
                <div>Art by:</div>
                <div>Elenco degli artisti</div>
            </div>
            <div class="d-flex">
                <div>Written by:</div>
                <div>Elenco degli scrittori</div>
            </div>
        </div>
        <div>
            <h3>Specs</h3>
            <div class="d-flex">
                <div>Series:</div>
                <div>ACTION COMICS</div>
            </div>
            <div class="d-flex">
                <div>U.S. Price:</div>
                <div>$19.99</div>
            </div>
            <div class="d-flex">
                <div>On Sale Date:</div>
                <div>Oct 02 2018</div>
            </div>
        </div>
    </div>
</div>

@endsection