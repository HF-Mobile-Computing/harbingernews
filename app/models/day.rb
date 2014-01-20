class Day < ActiveRecord::Base
	attr_accessible :aorb
	has_paper_trail
end