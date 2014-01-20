class Meeting < ActiveRecord::Base
   attr_accessible :date, :info, :club_id
   belongs_to :club, :inverse_of => :meetings
   has_paper_trail
end
