class ClubPhoto < ActiveRecord::Base
   attr_accessible :photo, :club_id
   has_attached_file :photo, styles: { thumbnail: '100x100>' }
   belongs_to :club
   has_paper_trail
end
