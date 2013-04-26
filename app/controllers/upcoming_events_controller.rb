class UpcomingEventsController < ApplicationController
  # GET /upcoming_events
  # GET /upcoming_events.json
  def index
    @upcoming_events = UpcomingEvent.all

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @upcoming_events }
    end
  end

  # GET /upcoming_events/1
  # GET /upcoming_events/1.json
  def show
    @upcoming_event = UpcomingEvent.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @upcoming_event }
    end
  end

  # GET /upcoming_events/new
  # GET /upcoming_events/new.json
  def new
    @upcoming_event = UpcomingEvent.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @upcoming_event }
    end
  end

  # GET /upcoming_events/1/edit
  def edit
    @upcoming_event = UpcomingEvent.find(params[:id])
  end

  # POST /upcoming_events
  # POST /upcoming_events.json
  def create
    @upcoming_event = UpcomingEvent.new(params[:upcoming_event])

    respond_to do |format|
      if @upcoming_event.save
        format.html { redirect_to @upcoming_event, notice: 'Upcoming event was successfully created.' }
        format.json { render json: @upcoming_event, status: :created, location: @upcoming_event }
      else
        format.html { render action: "new" }
        format.json { render json: @upcoming_event.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /upcoming_events/1
  # PUT /upcoming_events/1.json
  def update
    @upcoming_event = UpcomingEvent.find(params[:id])

    respond_to do |format|
      if @upcoming_event.update_attributes(params[:upcoming_event])
        format.html { redirect_to @upcoming_event, notice: 'Upcoming event was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @upcoming_event.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /upcoming_events/1
  # DELETE /upcoming_events/1.json
  def destroy
    @upcoming_event = UpcomingEvent.find(params[:id])
    @upcoming_event.destroy

    respond_to do |format|
      format.html { redirect_to upcoming_events_url }
      format.json { head :no_content }
    end
  end
end
