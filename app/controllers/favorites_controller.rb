class FavoritesController < ApplicationController
  
  # Set a page as a favorite
  def create
    @fav = current_user.favorites.create({:favoritable_id => params[:fav_id], :favoritable_type => params[:fav_type]})
    
    if @fav.save
      render :json => { :result => 'success' }
    else
      render :json => { :result => 'error' }
    end
  end
  
  # Delete a favorite
  def destroy
    @fav = current_user.favorites.find(:last, :conditions => [ 'favoritable_type = ? AND favoritable_id = ?', params[:fav_type], params[:fav_id] ])
    @fav.destroy
    
    if @fav.destroy
      render :json => { :result => 'success' }
    else
      render :json => { :result => 'error' }
    end
  end
  
  # Get the list of a user's favorites
  def list
    @full_favs = current_user.favorites
    
    @favs = []
    
    @full_favs.each do |fav|
      if fav.favoritable_type == 'sport'
        hash = { "title" => Sport.find(fav.favoritable_id).title, 'url' => '/sports/' + Sport.find(fav.favoritable_id).slug, "favoritable_type" => "sport" }
        @favs.push(hash)
      elsif fav.favoritable_type == 'club'
        hash = {"title" => Club.find(fav.favoritable_id).name, "url" => "/clubs/" + Club.find(fav.favoritable_id).slug, "favoritable_type" => "club"}
        @favs.push(hash)
      end
    end
    
    respond_to do |format|
      format.json { render json: @favs }
    end
  end

end
