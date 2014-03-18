ActiveAdmin.register ClubPhoto do
	menu :parent => "Clubs"
	form do |f|
    f.inputs "Details" do
      f.input :club
      f.input :photo, :as => :file
    end
    f.actions do
      f.action :submit
    end
  end
end