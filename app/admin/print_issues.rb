ActiveAdmin.register PrintIssue do
  menu :parent => "News"
  form do |f|
    f.inputs "Print Issues" do
      f.input :link, :label => 'Link to Google Drive'
      f.input :title, :label => 'Issue Title'
      f.input :description, :label => 'Issue Description'
      f.input :pubdate, :label => 'Published Date'
       
    end
    f.inputs do
      f.submit
    end
  end
end