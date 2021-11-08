// Cookies

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}
// end of Cookies

window.onunload = function(e)
{
 var player_track = jwplayer("player").getPlaylistItem().index;
 createCookie("player_track", player_track);

 var player_elapsed = jwplayer("player").getPosition();
 createCookie("player_elapsed", player_elapsed);

 var state = jwplayer("player").getState();
 var player_pause = "false";
 if (state=="PAUSED")
 {
  player_pause = "true";
 }
 createCookie("player_pause", player_pause);
}

// Reading player settings before embedding
player_track=0;
player_elapsed=0;
player_pause="false";

cookie = readCookie("player_track");
player_track = cookie ? cookie : 0;

cookie = readCookie("player_elapsed");
player_elapsed = cookie ? cookie : 0;

cookie = readCookie("player_pause");
player_pause = cookie ? cookie : "false";
