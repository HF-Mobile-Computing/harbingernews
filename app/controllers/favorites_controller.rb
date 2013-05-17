class FavoritesController < ApplicationController
  
  def create
    @fav = current_user.favorites.create({:favoritable_id => params[:fav_id], :favoritable_type => params[:fav_type]})
    
    if @fav.save
      render :nothing => true
    else
      render :unprocessible_entity, json: favorites.errors
    end
  end
  
  
  def destroy
    @fav = current_user.favorites.find(:last, :conditions => [ 'favoritable_type = ? AND favoritable_id = ?', params[:fav_type], params[:fav_id] ])
    @fav.destroy
    if @fav.destroy
      render :nothing => true
    else
      render :unprocessibly_entity, json: favorites.errors
    end
  end

end
