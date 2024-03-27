<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Auto Play YouTube Video</title>
</head>
<body>

<!-- YouTube Player Container -->
<div id="player"></div>

<script>
// Replace 'YOUR_VIDEO_ID' with the ID of your YouTube video
var videoId = 'YOUR_VIDEO_ID';
var player;

// This function creates an <iframe> (and YouTube player) after the API code downloads.
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '360',
    width: '640',
    videoId: videoId,
    events: {
      'onReady': onPlayerReady
    }
  });
}

// The API will call this function when the video player is ready.
function onPlayerReady(event) {
  // You can adjust the specific time to start playing the video
  var specificTime = new Date('2024-03-27T12:00:00'); // Example time (replace with your desired time)
  var currentTime = new Date();
  var timeUntilPlay = specificTime.getTime() - currentTime.getTime();
  
  if (timeUntilPlay > 0) {
    setTimeout(function() {
      player.playVideo();
    }, timeUntilPlay);
  } else {
    console.log("The specified time has already passed.");
  }
}
</script>

<!-- Load YouTube Iframe API -->
<script src="https://www.youtube.com/iframe_api"></script>

</body>
</html>
