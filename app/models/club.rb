class Club < ActiveRecord::Base
  attr_accessible :slug, :name, :category, :content
end
# == Schema Information
#
# Table name: clubs
#
#  id         :integer         not null, primary key
#  created_at :datetime        not null
#  updated_at :datetime        not null
#

