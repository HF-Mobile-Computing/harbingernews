class Club < ActiveRecord::Base
  attr_accessible :slug, :name, :category, :content
end
# == Schema Information
#
# Table name: clubs
#
#  id         :integer         not null, primary key
#  slug       :string(255)
#  name       :string(255)
#  category   :string(255)
#  content    :string(255)
#  created_at :datetime        not null
#  updated_at :datetime        not null
#

