ActiveAdmin.register Sport do

  # Custom Active Admin contoller stuff
  controller do
  
    # Use slug as the to_param
    defaults :finder => :find_by_slug
    
  end
  
  # Filters
  filter :title
  filter :season
  filter :content

  # Custom index as table
  index as: :table do
    selectable_column
    column :id
    column :title
    column :content
    column :season
    default_actions
  end
  
  # Custom show page
  show do
    attributes_table do
      row :id
      row :title
      row :content
      row :season
      row :alert
    end
    
    panel "Games" do
      table_for(sport.games) do
        column :id
        column :date
        column :time
        column :opponent
        column :is_home
        column :score
        column :status
      end
    end
  end
  
end
