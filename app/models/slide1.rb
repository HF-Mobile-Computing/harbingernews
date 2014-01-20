class Slide1 < ActiveRecord::Base
   attr_accessible :title, :caption, :imgurl
   has_paper_trail
end
