ActiveAdmin.register PrintIssue do
  menu :parent => "News"
  index as: :table do
    selectable_column
    column :title
    column :description
    column :pubdate
    column :created_at
    column :updated_at
    default_actions
  end

  form do |f|
    f.inputs "Print Issues" do
      f.input :title, :label => 'Issue Title'
      f.input :description, :label => 'Issue Description'
      f.input :pubdate, :label => 'Published Date'
       
    end
    f.inputs "PDF Upload" do
      f.file_field :pdf
    end
    f.inputs do
      f.submit
    end
  end
end