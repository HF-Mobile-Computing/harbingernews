var sport_id = <%= Sport.find_by_slug(params[:slug]).id %>;

$('#favorite_button').click(function() {
  
  if ($('#favorite_button').hasClass('favorite')) {
  
    // Delete the Favorite
    console.log('Favorite button clicked');
    $.ajax({
      type: 'DELETE',
      url: '/favorites',
      data: "fav_id=" + sport_id + "&fav_type=sport",
      dataType: JSON,
      statusCode: {
        200: function(data) {
               $('#favorite_button').removeClass('favorite');
               console.log('Delete Function executed successfully');
             },
        500: function(data) {
               console.log('Delete Function executed unsuccessfully');
             }
      }
    }); 

  } else {
  
    // Add the Favorite
    console.log('Favorite button clicked');
    $.ajax({
      type: 'POST',
      url: '/favorites.json',
      data: "fav_id=" + sport_id + "&fav_type=sport",
      dataType: JSON,
      statusCode: {
        200: function(data) {
               console.log('Post Function executed successfully');
               $('#favorite_button').addClass('favorite');
             },
        500: function(data) {
               console.log('Post Function executed unsuccessfully');
             }
      }
    }); 
  }
});
