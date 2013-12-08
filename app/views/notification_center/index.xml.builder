xml.instruct!  
xml.notifications do  
	@notifications.each do |notification|
	      xml.notification do
	        xml.content notification.content
	        xml.time notification.created_at.strftime('%B %d, %Y at %l:%M%P')	        
	      end
	end
end	

