ActiveAdmin.register ClassPhoto do
	menu :parent => "Classes"
	form do |f|
    f.inputs "Details" do
      f.input :academic_class
      f.input :photo, :as => :file
    end
    f.actions do
      f.action :submit
    end
  end
end