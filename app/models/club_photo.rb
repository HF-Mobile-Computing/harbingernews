class ClubPhoto < ActiveRecord::Base
   attr_accessible :photo, :club_id
   has_attached_file :photo
   belongs_to :club
   has_paper_trail
end
