ActiveAdmin.register Student do
  form do |f|
    f.inputs "Student" do
      f.input :name
      f.input :subject, :as => :select, :label => "Subject", :collection => [["Social Studies", "ss"], ["Science", "sc"], ["Math", "mt"]]
      

    end
    f.inputs do
      f.submit
    end
  end

end