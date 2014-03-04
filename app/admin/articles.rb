ActiveAdmin.register Article do


  menu :parent => "News"

index as: :table do
    selectable_column
    column :id
    column :title
    column :author
    column :created_at
    column :updated_at
    default_actions
  end

form do |f|
    f.inputs "Details" do
      f.input :title
      f.input :author
      f.input :category, :as => :select, :collection => [["Review", "review"], ["Sport Article", "sports"], ["Club Article", "clubs"], ["No Category", ""]]
      f.input :body, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs "Image" do
      f.file_field :image
    end 
    f.inputs "Caption" do
      f.input :caption
    end
    f.inputs do
      f.submit
    end
  end
end