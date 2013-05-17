class FavoritesController < ApplicationController
  
  def create
    @fav = current_user.favorites.create({:favoritable_id => params[:fav_id], :favoritable_type => params[:fav_type]})
    
    if @fav.save
      render :nothing => true
    else
      render :unprocessible_entity, json: favorites.errors
    end
  end

end
