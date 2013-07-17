ActiveAdmin.register Club do

  menu :parent => "Clubs"

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
      f.input :category, :as => :select, :collection => [["Community Service", "community"], ["Student Services", "services"], ["Sciences", "sciences"], ["Cultural", "cultural"], ["Academic", "academic"], ["Arts", "arts"]]
      f.input :content, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs do
      f.submit
    end
  end
  
end
