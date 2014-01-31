class PrintIssue < ActiveRecord::Base
  attr_accessible :link, :pubdate, :description, :title, :pdf
  has_paper_trail

   has_attached_file :pdf

end
