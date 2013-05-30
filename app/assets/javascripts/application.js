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
  $.ajax({
    type: 'GET',
    url: '/favorites',
    dataType: JSON,
    statusCode: {
      200: function(data) {
             console.log('Get Function executed successfully');
             window.favs = JSON.parse(data.responseText);
             console.log(favs)
             for (var i = 0; i < window.favs.length; i++) {
                if (favs[i].favoritable_type === "sport") {
                  $('<li class="fav"><a href="' + window.favs[i].url + '">' + window.favs[i].title + '</a></li>').insertAfter('#favs_sports_header');
                } else if (favs[i].favoritable_type === "club") {
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