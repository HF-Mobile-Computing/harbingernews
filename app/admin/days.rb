ActiveAdmin.register Day do
	menu :parent => "A or B day"

	form do |f|
    f.inputs "(Date is automatically populated)" do
      
      f.input  :aorb, :as => :select, :label => "Choose Day", :collection => [["A day", "A"], ["B day", "B"], ["No School", "There is No School Today"]]
      
    end
    f.inputs do
      f.submit "Submit"
    end
  end
end