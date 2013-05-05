class Announcement < ActiveRecord::Base
  attr_accessible :a_or_b, :content
  has_paper_trail
end
# == Schema Information
#
# Table name: announcements
#
#  id         :integer         not null, primary key
#  a_or_b     :string(255)
#  content    :text
#  created_at :datetime        not null
#  updated_at :datetime        not null
#

