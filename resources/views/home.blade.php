@extends('layouts.app')

@section('content')

<style>
    body {
        margin: 0;
        background: #E6E2D6;
    }
    .loader-container {
        position: absolute;
        top: 83%;
        left: 5%;
        width: 100px;
        height: 100px;
        background: #BDE2E0;
        border-radius: 30%;
        border: 10px solid #D7695A;
        box-shadow: inset 0 0 15px rgba(0,0,1);
        color: white;
        text-align: center;
        font-weight: bold;
        font-size: 30px;
        line-height: 100px;
        overflow: hidden;
    }
    @keyframes load {
        100% {
            transform: translateY(-1100px);
        }
    }
    .loader {
        animation: load 11s steps(11, end) infinite;
    }
</style>
<div class="loader-container">
    <div class="loader">
        <span>0%</span>
        <span>10%</span>
        <span>20%</span>
        <span>30%</span>
        <span>40%</span>
        <span>50%</span>
        <span>60%</span>
        <span>70%</span>
        <span>80%</span>
        <span>90%</span>
        <span>100%</span>
    </div>


@endsection
