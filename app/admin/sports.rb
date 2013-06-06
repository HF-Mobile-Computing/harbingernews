ActiveAdmin.register Sport do

  # Custom contoller stuff
  # ** Only affects Active Admin controller **
  controller do
  
    # Use slug as the to_param
    defaults :finder => :find_by_slug
  end

  # Custom index as table
  index as: :table do
    selectable_column
    column :id
    column :title
    column :content
    column :season
    default_actions
  end
  
end
