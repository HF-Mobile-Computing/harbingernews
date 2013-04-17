class Memo < ActiveRecord::Base
  attr_accessible :title, :content, :bg_color, :is_image, :image_path
end
