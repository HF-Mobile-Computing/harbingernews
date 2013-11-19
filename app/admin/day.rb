ActiveAdmin.register Day do
	menu :parent => "A or B day"

	form do |f|
    f.inputs "(Date is automatically populated)" do
      
      f.input :day, :as => :select, :collection => [["A day", "a"], ["B day", "b"]]
      
    end
    f.inputs do
      f.submit
    end
  end
end