class Sport < ActiveRecord::Base
  attr_accessible :content, :photo_path, :season, :slug, :title
  
  def to_param
    slug
  end
  
end
# == Schema Information
#
# Table name: sports
#
#  id         :integer         not null, primary key
#  slug       :string(255)
#  title      :string(255)
#  content    :text
#  season     :string(255)
#  photo_path :string(255)
#  created_at :datetime        not null
#  updated_at :datetime        not null
#  alert      :text
#

