ActiveAdmin.register Slide1 do


  menu :parent => "Homepage"

form do |f|
    f.inputs "Slide 1" do
      f.input :imgurl
      f.input :title
      f.input :caption, :config => { :width => '76%', :height => '400px' }
    end
    f.inputs do
      f.submit
    end
  end
end