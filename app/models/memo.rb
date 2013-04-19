class Memo < ActiveRecord::Base
  attr_accessible :title, :content, :bg_color, :text_color, :is_image, :image_path
  
  validates :title, presence: true
  validates :content, presence: true
end
# == Schema Information
#
# Table name: memos
#
#  id         :integer         not null, primary key
#  title      :string(255)
#  content    :string(255)
#  bg_color   :string(255)
#  is_image   :boolean
#  image_path :string(255)
#  created_at :datetime        not null
#  updated_at :datetime        not null
#  text_color :string(255)
#

