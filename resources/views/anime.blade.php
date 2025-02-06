<head>
<script src="//site.com/playerjs.js" type="text/javascript"></script>
  <style>
    .posterblock span, a{
      transition:0s;
      font-family: "Roboto", sans-serif !important;
  font-weight: 500;
  font-style: normal;
    }
    .info-min a{
      color: white;
      transition: 0s;
    }
    .info-min a:hover{
      color: white;
      transition: 0s;
    }
    .posterblock .top{
      position: relative;
      overflow: hidden;
      max-width: 250px;
      
    }
    .line{
      justify-content: space-between;
    flex-wrap: wrap;
      width: 100%;
      display: flex;
      padding: 20x;
    }
    .posterblock{
      margin-top:10px;
    }
    .info-max__episodes{
    }
    .posterblock .info-min{
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(rgba(90, 49, 141, 0) 0%, rgba(90, 49, 141, 60) 76.56%);
    transform: translate(0, 100%);
    z-index: 3;
    transition: 0.6s;
    height: 50px;
    }
    .top:hover .info-min{
      transform: translate(0, 0);
      overflow: none;
    }
    .top:hover .info-max{
      background: rgba(90, 49, 141, 0.8);
    }
    .info-max{
      z-index: 2;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
    }
    .info-max__block{
      color:white;
      display: flex;
      align-items:center;
    }
    .info-min span{
      margin-left: 5px
    }
    .top:hover .play{
      opacity: 1;
    }
    .top:hover .info-max{
      opacity: 1;
    }
    .play{
      margin-left: 15px;
      opacity: 0;
    }
    .play img{
      width: 70px;
      height: 76px;
    }
    .episodes{
      justify-content: center;
      flex-direction: column;
    display: flex;
    align-items: end;
    }
    .posterblock__genres a{
      font-size: 13px;
      color: gray;
    }
    .posterblock__img{
      width: 300px;
    }
    .posterblock__primary-text{
      text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 250px;
  color: black;
    }
    .container{
      display: flex;
    flex-direction: column;
    justify-content: center;
    }
    .posterblock__genres-genre{
       text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  max-width: 250px;
  color: gray;
    }
    .posterblock__second-text{
      text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 250px;
  color: #5a318d;
    }
    .bottom{
      text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 250px;
  color: #5a318d;
    }
    .title h1{
      color: black;
    }
    .japan-title span{
      color: black;
    }
    .info span{
      font-size: 17px;
      display: flex;
      color: black;
    }
    .info a{
      font-size: 17px;
      color: #5a318d;
    }
    .anime-menu{
      display: flex;
      margin-top: 50px;
    }
    .anime-inf{
      margin-left: 25px;
    }
    .episode-selector{
      display: flex;
    }
    .player-btn{
      background-color: #5a318d;
      border: 0px;
      width: 90px;
      height: 30px;
      font-size: 17px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    /* .videoplayer__controls{
      visibility: hidden;
      justify-content: center;
      position: absolute;
      width: 100%;
      bottom: 0;
      left: 0;
      width: 100%;
      box-sizing: border-box;
      display: flex;
      align-items: center;
      background-color: #3f2264;
      border-bottom-left-radius: 3px;
      border-bottom-right-radius: 3px;
      height: 45px;
    }
    .videoplayer{
      object-fit: cover;
      width: 100%;
      height: 100%;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
    }
    .videoplayer video{
      border-radius: 10px;
      background-color: #5a318d;
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
    .videoplayer__controls button{
      border: 0px;
    }
    input[type=range].volumeRange{
      -webkit-appearance: none;
      height: 3px;
      background: linear-gradient(to right, #9776BF 0%, #9776BF 100%);
    }
    input[type=range].volumeRange::-webkit-slider-thumb{
      -webkit-appearance: none;
      background: #9776BF;
      background-color: #9776BF;
      color: #9776BF;
      width: 10px;
      height: 10px;
      cursor: pointer;
      border-radius: 20px;
    }

    input[type=range].volumeRange::-moz-range-thumb{
      -webkit-appearance: none;
      background: #9776BF;
      background-color: #9776BF;
      color: #9776BF;
    }

    input[type=range].volumeRange::-ms-thumb{
      -webkit-appearance: none;
      background: #9776BF;
      background-color: #9776BF;
      color: #9776BF;
    }
    .vp-volume:hover +.volumeRange, .volumeRange:hover{
      visibility: visible;
    }
    .volumeRange{
      visibility: hidden;
    }
    .play-screen{
      position: absolute;
      cursor: pointer;
    }
    video::-webkit-media-controls {
      display:none;
    }
    .vp-skip, .vp-volume, .vp-play{
      margin-left: 20px;
    }
    .vp-fullscreen{
      margin-left: auto;
      margin-right: 20px;
    }
    input[type=range].vp-progressbar{
      -webkit-appearance: none;
      height: 5px;
      background: white;
      position: absolute;
      left:0;
      width: 100%;
      bottom: 45;
    }
    input[type=range]::-webkit-slider-thumb.vp-progressbar{
      -webkit-appearance: none;
      background: #9776BF;
      position: absolute;
      width: 10px;
      height: 10px;
      cursor: pointer;
      border-radius: 20px;
    } */


@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  </style>
  <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css" />
<link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css" />
  <script src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>
</head>
<body>
<x-header>
</x-header>
<main>
<div class="container">
  <div class="anime-menu">
    <div class="poster">
  <img src="{{ asset($anime->Poster)}}" alt="" class="posterblock__img">
  </div>
  <div class="anime-inf">
  <div class="title">
    <h1 style="font-size: 25px; color: #5a318d;">{{$anime->RU_Title}}</h1>
  </div>
  <div class="japan-title">
    <span style="color: #696969; font-size: 15px;">{{$anime->Romanji_Title}}</span>
  </div>
  <div class="info">
    <span>Тип:&nbsp<a href=""> {{$anime->Type}}</a></span>
    <span>Эпизоды:&nbsp<div class='info-span' style="color:#5a318d; font-size: 17px;">{{$anime->Episodes}}</div></span>
    <span>Год:&nbsp<a href=""> {{$anime->Year}}</a></span>
    <span>Статус:&nbsp<a href=""> {{$anime->Status}}</a></span>
    <span>Жанры:&nbsp @foreach ($genres as $genre)<a href=""> {{$genre->Genre}}</a>@if(!$loop->last),&nbsp @endif @endforeach</span>
    <span>Рейтинг:&nbsp<a href=""> {{$anime->Age_limit}}</a></span>
    <span>Роли озвучивали:&nbsp<a href=""> {{$anime->Dubbers}}</a></span>
    <span>Тайминг и работа над звуком:&nbsp<a href=""> {{$anime->Timer}}</a></span>
  </div>
  <div class="desc" style="width:800px; margin-top: 30px;"><span style="color:black; font-size: 20px;">{{$anime->Description}}</span></div>
</div>
</div>
<media-player title="Sprite Fight" src="{{asset($currentVideo->video)}}">
  <media-provider></media-provider>
  <media-video-layout thumbnails="https://files.vidstack.io/sprite-fight/thumbnails.vtt"></media-video-layout>
</media-player>
<script src="https://cdn.vidstack.io/player" type="module"></script>
<script src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>
  </body>