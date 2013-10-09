ActiveAdmin.register Article do
form do |f|
    f.inputs "Details" do
      f.input :title
      f.input :body, :as => :rich, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs do
      f.submit
    end
  end
end