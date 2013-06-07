ActiveAdmin.register Announcement do
  
  menu :parent => "Homepage"
  
  filter :id
  filter :content
  
  index as: :table do
    selectable_column
    column :id
    column :a_or_b
    column :content
    column :created_at
    default_actions
  end
  
  show do
    attributes_table do
      row :id
      row :a_or_b
      row(:content) { |c| raw(c.content) }
      row :created_at
      row :updated_at
    end
  end
  
  form do |f|
    f.inputs "Content" do
      f.input :content, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
  end
  
end
