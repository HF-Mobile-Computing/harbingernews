xml.instruct!  
  
xml.day do  
  
	
	if @day.aorb == "A"
		xml.aorb("Today is an A Day") 
	elsif @day.aorb == "B"
		xml.aorb("Today is a B Day") 
	elsif @day.aorb == "none"
		xml.aorb("There is no school today") 
	end
	xml.created_at(@day.created_at)  
	xml.updated_at(@day.updated_at)  
	xml.id(@day.id)  
  
end  