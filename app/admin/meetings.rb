ActiveAdmin.register Meeting do
  
  
  menu :parent => "Clubs"
  
  filter :date
  filter :info
  
  index as: :table do
    selectable_column
    column :date
    column :info

    default_actions
  end
  
end
