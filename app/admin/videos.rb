ActiveAdmin.register Video do

menu :parent => "Videos"

  form do |f|
    f.inputs "Video" do
      f.input :title
      f.input :video_id, :label => "Video ID"
      f.input :video_type, :as => :select, :label => "Video Type", :collection => [["Youtube Video", "yt"], ["Highschool Cube Video", "hsc"]]
      

    end
    f.inputs do
      f.submit
    end
  end
end