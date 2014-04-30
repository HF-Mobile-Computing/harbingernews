class ClassPhoto < ActiveRecord::Base
   attr_accessible :photo, :academic_class_id
   has_attached_file :photo, styles: { thumbnail: '100x100>' }
   belongs_to :academic_class
   has_paper_trail
end
