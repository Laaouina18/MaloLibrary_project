<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Audio player</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="main" >
    <!-- top section -->
	<div class="ensemble">
		<div class="param">
			<span id="nav"onclick="openNav()">&#9776;</span>
		  </div>
		<div class="top_section">
			<h5>Audio Player&nbsp;&nbsp;<i class="fa fa-headphones" aria-hidden="true"></i></h5>
		</div>
	
	</div>
	<div id="mySidenav" class="left-nav">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One|Biryani|Raleway:300|Source+Code+Pro|Muli" rel="stylesheet">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="navoptions">
		<a href="#" id="un" ><span class="fa fa-music" aria-hidden="true"></span><p>music</p></a>
		<a href="#" id="deux" ><span class="fa fa-star-o" aria-hidden="true"></span><p>favorites</p></a>
		<a href="#" id="trois"><span class="fa fa-share-alt" aria-hidden="true"></span><p>share</p></a>
		<a href="#" id="quatre" ><span class="fa fa-gear" aria-hidden="true"></span><p>settings</p></a>
		<a href="#" id="cinq" ><span class="fa fa-search" aria-hidden="true"></span><p>search</p></a>
		<a href="#" id="six"><span class="fa fa-power-off" aria-hidden="true"></span><p>exit</p></a>
			</div></div>
    

  <div class="tracks">
    
    <!-- list of song will add here from 'song_list.js' file -->

    <!-- small music player -->
    <div class="small_music_player">
    	<div class="s_player_img">
    		<div class="playing_img">
    			<img src="{{asset('images/1.jpg')}}" alt="">
    		</div>
    	
           <!-- wave animation part -->
    	   <div class="wave_animation">
			 <li></li>
			 <li></li>
			 <li></li>
			 <li></li>
			 <li></li>
	       </div>
	    </div>

    	<div class="song_detail">
    		<p id="song_name">Make Me Move</p>
    		<p id="artist_name">NoCopyrightSounds [NCS]</p>
    	</div>
    	<i class="fa fa-chevron-up" aria-hidden="true" id="up_player"></i>
    </div>
	<div class="song">
      <div class="img">
      <img src="{{asset('images/1.jpg')}}"/>
      </div>
      <div class="more">
      <audio src="{{asset('images/1.jpg')}}" id="music"></audio>
      <div class="song_info">
         <p id="title">OKOK</p>
         <p>HHJ</p>
      </div>
      <button id="play_btn"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
      </div>
    </div>
	<div class="song">
      <div class="img">
      <img src="{{asset('images/1.jpg')}}"/>
      </div>
      <div class="more">
      <audio src="{{asset('images/1.jpg')}}" id="music"></audio>
      <div class="song_info">
         <p id="title">OKOK</p>
         <p>HHJ</p>
      </div>
      <button id="play_btn"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
      </div>
    </div>

    <!--  popup music player part -->
    <div class="popup_music_player">
		<div style="  width:100%;display: flex;
	flex-wrap: nowrap;
	justify-content: space-between;
	align-items: center;">
	








         <div class="top">
    	    <p>Now Playing</p>
    	    <i class="fa fa-chevron-down" aria-hidden="true" id="down_player"></i>
        </div>
	</div>
        
       <div class="song_img">
          <img src="{{asset('images/1.jpg')}}" alt="">
       </div>

       <div class="song_description">
          <h3 id="current_track_name">Make Me Move</h3>
          <p id="current_singer_name">NoCopyrightSounds [NCS]</p>
       </div>

       <div class="controlls">
    	 <div class="progress_part">
    		<input type="range" min="0" max="100" value="0" id="slider" onchange="change_duration()">
    		<div class="durations">
    			<p id="current_duration">0:00</p>
    		    <p id="total_duration">0:00</p>
    		</div>

       </div>
    		
        <!-- controlls btn's -->
        <div class="controlls_btns">
			<button id="backward_btn"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
			<button id="play_pause_btn" ><i class="fa fa-play" aria-hidden="true"></i></button>
			<audio id="audio" src="{{asset('images/audio.mp3')}}"></audio>
			<button id="forward_btn"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
</div>
</div>
<form action="/artists" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="text" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
        <label for="birthday">Anniversaire:</label>
        <input type="date" class="form-control" id="birthday" name="birthday" required>
    </div>
    <div class="form-group">
        <label for="country">Pays:</label>
        <input type="text" class="form-control" id="country" name="country" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter l'artiste</button>
</form>
<script src="{{ asset('js/main.js') }}"></script>

<!-- song list file -->
<!-- <script src="song_list.js"></script>
<!-- javascript -->
<!-- <script src="main.js"></script> -->
	 
</body>
</html>