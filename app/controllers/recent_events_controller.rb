class RecentEventsController < ApplicationController
  # GET /recent_events
  # GET /recent_events.json
  def index
    @recent_events = RecentEvent.all(:order => 'id DESC')

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @recent_events }
    end
  end

  # GET /recent_events/1
  # GET /recent_events/1.json
  def show
    @event = RecentEvent.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @event }
    end
  end

  # GET /recent_events/new
  # GET /recent_events/new.json
  def new
    @recent_event = RecentEvent.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @recent_event }
    end
  end

  # GET /recent_events/1/edit
  def edit
    @recent_event = RecentEvent.find(params[:id])
  end

  # POST /recent_events
  # POST /recent_events.json
  def create
    @recent_event = RecentEvent.new(params[:recent_event])

    respond_to do |format|
      if @recent_event.save
        format.html { redirect_to @recent_event, notice: 'Recent event was successfully created.' }
        format.json { render json: @recent_event, status: :created, location: @recent_event }
      else
        format.html { render action: "new" }
        format.json { render json: @recent_event.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /recent_events/1
  # PUT /recent_events/1.json
  def update
    @recent_event = RecentEvent.find(params[:id])

    respond_to do |format|
      if @recent_event.update_attributes(params[:recent_event])
        format.html { redirect_to @recent_event, notice: 'Recent event was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @recent_event.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /recent_events/1
  # DELETE /recent_events/1.json
  def destroy
    @recent_event = RecentEvent.find(params[:id])
    @recent_event.destroy

    respond_to do |format|
      format.html { redirect_to recent_events_url }
      format.json { head :no_content }
    end
  end
end
