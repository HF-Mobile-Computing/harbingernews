class Notification < ActiveRecord::Base
   attr_accessible :content
   has_paper_trail
   #after_create :push

   def push

	   	if :ios == true
			   	data = { :alert => "#{content}" }
			push = Parse::Push.new(data, "ios_channel")
			push.type = "ios"
			push.save
		end

		if :android == true
			   	data = { :alert => "#{content}" }
			push = Parse::Push.new(data, "Broadcast")
			push.type = "android"
			push.save
		end
	end
end
