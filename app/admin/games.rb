ActiveAdmin.register Game do
  
  
  menu :parent => "Sports"
  
  filter :date
  filter :time
  filter :opponent
  filter :is_home
  
  index as: :table do
    selectable_column
    column :id
    column :date
    column :opponent
    column :time
    column :is_home
    column :score
    column :status
    default_actions
  end
  
end
