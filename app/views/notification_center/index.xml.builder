xml.instruct!  
  
	@notifications.each do |game| 
	    xml.item do
	        xml.content notification.content
	        xml.date notification.created_at
			
	    end
	end

#There is an issue with this Builder Template. Using default render for now