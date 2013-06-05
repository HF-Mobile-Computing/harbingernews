//= require jquery
//= require jquery_ujs
//= require twitter/bootstrap
//= require rich
//= require breakpoints
//= require_self

// On Page Load
$(function() {
  getFavs();
});

// Get User Favorites
function getFavs() {
  $('.fav').remove();
  $("#beforeFavs").nextUntil("#afterFavs").remove(); // Get rid of favorites menu for a bit. If the user has favorites, it will reappear, like MAGIC! 
  $.ajax({
    type: 'GET',

    url: '/favorites.json',
    dataType: JSON,
    statusCode: {
      200: function(data) {
             console.log('Get Function executed successfully');
             window.favs = JSON.parse(data.responseText);
             var clubCount = 0;
             var sportCount = 0; // A rather primitive way of doing it, but hey, it works!
             console.log(favs)
             if (favs.length > 0) {
              console.log("User has favorites.") // YAAY, THE USER LIKES SOMETHING!
              $('<li class="dropdown-submenu"><a href="#">Favorites</a><ul class="dropdown-menu" id="favList"></ul></li>').insertAfter("#beforeFavs")
             }
             for (var i = 0; i < window.favs.length; i++) {
                if (favs[i].favoritable_type === "sport") {
                  
                  if (sportCount === 0) { // Put in the header if the user likes a sport, but only once.
                    $("#favList").append('<li class="nav-header" id="favs_sports_header">Sport</li>'); 
                    sportCount += 1;}
                  $('<li class="fav"><a href="' + window.favs[i].url + '">' + window.favs[i].title + '</a></li>').insertAfter('#favs_sports_header');
                } else if (favs[i].favoritable_type === "club") {
                  
                  if (clubCount === 0) { // Put in the header if the user likes a club, but only once.
                    $("#favList").append('<li class="nav-header" id="favs_club_header">Clubs</li>'); 
                    clubCount += 1;
                  }
                  // Actually add the favorite to the list.
                  $('<li class="fav"><a href="' + window.favs[i].url + '">' + window.favs[i].title + '</a></li>').insertAfter('#favs_club_header');
                }
             }
           },
      500: function(data) {
             console.log('Get Function executed unsuccessfully');
           }
    }
  });
}
