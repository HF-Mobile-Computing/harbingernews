class NotificationCenterController < ApplicationController
	def index
		@notifications = Notification.all(:order => "id DESC")
		respond_to do |format|
	       format.json { render json: @notifications}
	        format.xml 
	    end
	end
end
