class RecentEvent < ActiveRecord::Base
  attr_accessible :content
end
# == Schema Information
#
# Table name: recent_events
#
#  id         :integer         not null, primary key
#  content    :string(255)
#  created_at :datetime        not null
#  updated_at :datetime        not null
#

