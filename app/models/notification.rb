class Notification < ActiveRecord::Base
   attr_accessible :content
   has_paper_trail
   after_create :push

   def push
	   	data = { :alert => "#{content}" }
	push = Parse::Push.new(data)
	push.save
   end
end
