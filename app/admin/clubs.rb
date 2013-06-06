ActiveAdmin.register Club do
  
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
  
end
