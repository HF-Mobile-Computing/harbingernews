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
    column :season
    default_actions
  end
  
  # Custom show page
  show do
    attributes_table do
      row :id
      row :title
      row :season
      row :content
      row :alert
      row(:banner_image) { image_tag sport.banner.url(:full) }
    end
    
    panel "Games" do
      table_for(sport.games) do
        column :id
        column :date
        #column :time
        column :opponent
        column :is_home
        column :score
        column :status
        column(:edit) { |g| link_to "Edit", edit_admin_game_path(g) }
      end
    end
  end
  
  # Custom form
  form do |f|
    f.inputs "Details" do
      f.input :title
      f.input :season
    end
    f.inputs "Banner Image" do
      f.file_field :banner
    end
    f.inputs "Info" do
      #f.input :alert, :as => :string  Commented out for asthetics; Unfinished feature?
      f.input :content, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs do
      f.submit
    end
  end
  
end
