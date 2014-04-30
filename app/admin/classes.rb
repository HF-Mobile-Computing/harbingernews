ActiveAdmin.register AcademicClass do
  menu :parent => "Classes"

  

  controller do
    defaults :finder => :find_by_slug
  end
  
  filter :name
  filter :category
  filter :content
  
  index as: :table do
    selectable_column
    column :id
    column :name
    column :category
    default_actions
  end
  
  # Custom form
  form do |f|
    f.inputs "Details" do
      f.input :name
      f.input :category, :as => :select, :collection => [["Science", "science"], ["Math", "math"], ["English", "english"], ["Social Studies", "social_studies"], ["Foreign Language", "foreign_language"], ["Arts and Music", "arts_and_music"],["Grades", "grades"]]
      f.input :content, :as => :rich, :config => { :width => '76%', :height => '400px' }

    end
    f.inputs do
      f.submit
    end
  end
  
end
