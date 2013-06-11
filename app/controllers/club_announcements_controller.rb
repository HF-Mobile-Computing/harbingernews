class ClubAnnouncementsController < ApplicationController
  load_and_authorize_resource

  def index
    @announcements = ClubAnnouncement.all(:order => 'id DESC')

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @club_announcements }
    end
  end

  def show
    @event = ClubAnnouncement.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @event }
    end
  end


  def new
    @club_announcement = ClubAnnouncement.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @club_announcement }
    end
  end

  def edit
    @club_announcement = ClubAnnouncement.find(params[:id])
  end

  def create
    @club_announcement = ClubAnnouncement.new(params[:club_announcement])

    respond_to do |format|
      if @club_announcement.save
        format.html { redirect_to @club_announcement, notice: 'Club Announcement was successfully created.' }
        format.json { render json: @club_announcement, status: :created, location: @club_announcement }
      else
        format.html { render action: "new" }
        format.json { render json: @club_announcement.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /club_announcements/1
  # PUT /club_announcements/1.json
  def update
    @club_announcement = ClubAnnouncement.find(params[:id])

    respond_to do |format|
      if @club_announcement.update_attributes(params[:club_announcement])
        format.html { redirect_to @club_announcement, notice: 'Club Announcement was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @club_announcement.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /club_announcements/1
  # DELETE /club_announcements/1.json
  def destroy
    @club_announcement = ClubAnnouncement.find(params[:id])
    @club_announcement.destroy

    respond_to do |format|
      format.html { redirect_to club_announcements_url }
      format.json { head :no_content }
    end
  end
end
