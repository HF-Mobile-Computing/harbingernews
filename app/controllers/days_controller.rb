class DaysController < ApplicationController
	def index
		@day = Day.last
		respond_to do |format|
	        format.html # index.html.erb
	        format.json { render json: @day }
      	end
	end
end