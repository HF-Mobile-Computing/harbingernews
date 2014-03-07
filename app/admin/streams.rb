ActiveAdmin.register Stream do

menu :parent => "Videos"

  form do |f|
    f.inputs "Stream" do
      f.input :title
      f.input :stream_id, :label => "Stream ID"
      

    end
    f.inputs do
      f.submit
    end
  end
end