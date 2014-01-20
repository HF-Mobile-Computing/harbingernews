class ClubAnnouncement < ActiveRecord::Base
  attr_accessible :content
  has_paper_trail
end
