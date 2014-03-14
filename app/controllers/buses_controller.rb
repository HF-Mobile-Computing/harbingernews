class BusesController < ApplicationController
  # GET /buses
  # GET /buses.json
  before_filter :check_signed_in
  before_filter :check_for_superuser

  def check_signed_in
    unless current_user.present? 
      redirect_to user_session_path, :flash => { :error => "You must be a Superuser to access this page!" }
    end
  end
  def check_for_superuser
    unless current_user.superuser == true 
      redirect_to root_path, :flash => { :error => "You must be a Superuser to access this page!" }
    end

  end
  def index
    @buses = Bus.all(:order => "id DESC")
    

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @buses }
      format.xml {render xml: @buses }
    end
  end

  # GET /buses/1
  # GET /buses/1.json
  def show
    @bus = Bus.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @bus }
    end
  end

  # GET /buses/new
  # GET /buses/new.json
  def new
    @bus = Bus.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @bus }
    end
  end

  # GET /buses/1/edit
  def edit
    @bus = Bus.find(params[:id])
    @bus = Bus.find(params[:id])
    authorize! :edit, Bus
  end

  # POST /buses
  # POST /buses.json
  def create
    @bus = Bus.new(params[:bus])

    respond_to do |format|
      if @bus.save
        format.html { redirect_to @bus, notice: 'Bus was successfully created.' }
        format.json { render json: @bus, status: :created, location: @bus }
      else
        format.html { render action: "new" }
        format.json { render json: @bus.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /buses/1
  # PUT /buses/1.json
  def update
    @bus = Bus.find(params[:id])
    authorize! :edit, Bus

    respond_to do |format|
      if @bus.update_attributes(params[:bus])
        format.html { redirect_to @bus, notice: 'Bus was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @bus.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /buses/1
  # DELETE /buses/1.json
  def destroy
    @bus = Bus.find(params[:id])
    @bus.destroy

    respond_to do |format|
      format.html { redirect_to buses_url }
      format.json { head :no_content }
    end
  end
  
   def map
    @bus = Bus.last
    Time.use_zone('Eastern Time (US & Canada)') do
      @created = @bus.created_at.strftime('%B %d, %Y')
      @updated = @bus.updated_at.strftime('%l:%M%P')
      respond_to do |format|
        format.html # index.html.erb
        format.json { render json: @bus }
        format.xml {render xml: @bus }
      end
    end
  end
  
end
