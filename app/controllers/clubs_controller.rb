class ClubsController < ApplicationController
  layout :resolve_layout

  # GET /clubs
  # GET /clubs.json
  def index
    @clubs = Club.all
    @arts = Club.where("category = :category", {:category => "arts"})
    @academic = Club.where("category = :category", {:category => "academic"})
    @community = Club.where("category = :category", {:category => "community"})
    @sciences = Club.where("category = :category", {:category => "sciences"})
    @cultural = Club.where("category = :category", {:category => "cultural"})
    @services = Club.where("category = :category", {:category => "services"})
    @all = Club.where("category = :category", {:category => "all"})
    

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @clubs }
    end
  end

  # GET /clubs/1
  # GET /clubs/1.json
  def show
    @club = Club.find_by_slug(params[:slug])
    @clubs = Club.all
    @arts = Club.where("category = :category", {:category => "arts"})
    @academic = Club.where("category = :category", {:category => "academic"})
    @community = Club.where("category = :category", {:category => "community"})
    @sciences = Club.where("category = :category", {:category => "sciences"})
    @cultural = Club.where("category = :category", {:category => "cultural"})
    @services = Club.where("category = :category", {:category => "services"})
    @all = Club.where("category = :category", {:category => "all"})
    
    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @club }
    end
  end

  # GET /clubs/new
  # GET /clubs/new.json
  def new
    @club = Club.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @club }
    end
  end

  # GET /clubs/1/edit
  def edit
    @club = Club.find_by_slug(params[:slug])
  end

  # POST /clubs
  # POST /clubs.json
  def create
    @club = Club.new(params[:club])

    respond_to do |format|
      if @club.save
        format.html { redirect_to @club, notice: 'Club was successfully created.' }
        format.json { render json: @club, status: :created, location: @club }
      else
        format.html { render action: "new" }
        format.json { render json: @club.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /clubs/1
  # PUT /clubs/1.json
  def update
    @club = Club.find(params[:id])

    respond_to do |format|
      if @club.update_attributes(params[:club])
        format.html { redirect_to @club, notice: 'Club was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @club.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /clubs/1
  # DELETE /clubs/1.json
  def destroy
    @club = Club.find(params[:id])
    @club.destroy

    respond_to do |format|
      format.html { redirect_to clubs_url }
      format.json { head :no_content }
    end
  end
  private

  def resolve_layout
    case action_name
    
    when "index"
      false
    
    when 'show'
      false
    
    else
      "application"
    end
  end
end
