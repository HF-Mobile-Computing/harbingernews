ActiveAdmin.register Game do
  
  
  
  filter :date
  filter :time
  filter :opponent
  filter :is_home
  filter :is_varsity
  
  index as: :table do
    selectable_column
    column :id
    column :date
    column :opponent
    column :time
    column :is_home
    column :score
    column :status
    column :is_varsity

    default_actions
  end
  
end
