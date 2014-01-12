class NotificationCenterController < ApplicationController
	def index
		@notifications = Notification.all(:order => "id DESC")
		respond_to do |format|
	       format.json 
	        format.xml 
	    end
	end
end
