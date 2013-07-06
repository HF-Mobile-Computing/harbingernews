ActiveAdmin.register RecentEvent do

  menu :parent => "Homepage"
  
  index as: :table do
    selectable_column
    column :id
    column :content
    column :created_at
    default_actions
  end
  
  show do
    attributes_table do
      row :id
      row(:content) { |c| raw(c.content) }
      row :created_at
      row :updated_at
    end
  end
  
  form do |f|
    f.inputs "Content" do
      f.input :content, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs do
      f.submit
    end
  end
  
end
