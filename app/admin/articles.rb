ActiveAdmin.register Article do


  menu :parent => "News"

form do |f|
    f.inputs "Details" do
      f.input :title
      f.input :author
      f.input :category, :as => :select, :collection => [["Review", "review"], ["Sport Article", "sports"], ["Club Article", "clubs"], ["No Category", ""]]
      f.input :body, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs do
      f.submit
    end
  end
end