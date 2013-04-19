class MemosController < ApplicationController
  
  def index
    @memos = Memo.all(:order => "id DESC")
    @memo = Memo.new
  end
  
  def new
    @memo = Memo.new
  end
  
  def edit
    @memo = Memo.find(params[:id])
  end
  
  def destroy 
    @memo = Memo.find(params[:id])
    @memo.destroy
    
    respond_to do |format|
      format.html { redirect_to memos_url }
      format.json { head :no_content }
    end
  end
  
  def update
    @memo = Memo.find(params[:id])

    respond_to do |format|
      if @memo.update_attributes(params[:memo])
        format.html { redirect_to memos_path, notice: 'Memo was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @memo.errors, status: :unprocessable_entity }
      end
    end
  end
  
  def create
    @memo = Sport.new(params[:memo])

    respond_to do |format|
      if @memo.save
        format.html { redirect_to memos_path, notice: 'Sport was successfully created.' }
        format.json { render json: @memo, status: :created, location: @memo }
      else
        format.html { render action: "new" }
        format.json { render json: @memo.errors, status: :unprocessable_entity }
      end
    end
  end

  
  

end
