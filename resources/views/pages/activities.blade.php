<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linggo ng Kabataan | Activities</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
   
</head>
<style>
   html, body {
    background-color: #F1F8E9;
    color: #000000;
    font-family: Aerial;
    font-weight: 200;
    height: 100vh;
    margin: 0;
    }


    .content {
    text-align: center;
    }

    .title {
    font-size: 84px;
    }

    .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    margin-top: 0px;
    }

    .m-b-md {
    margin-bottom: 10px;
    margin-top: 10px;
    }
    h4{
        margin-top: 60px;

    }
</style>
<body>
<div class="content">
    <div class="title m-b-md">
        ACTIVITIES
    </div>

<div class="links">

    <a href="{{url('/')}}">Home         </a>
    <a href="{{url('/activities')}}">Activities     </a> 
    <a href="{{url('/participants')}}">Participants</a> 

</div>

<div>
    <h4>Morning Activities</h4>
        <li>ML Tournament</li>
        <li>Tiktok Competition</li>
        <li>Essay Writing</li>
    <h4>Afternoon Activities</h4>
        <li>Sing Along</li>
        <li>Poster Making Contest</li>
        <li>Awarding</li>
</div>
</body>
</html>