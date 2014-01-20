class PrintIssue < ActiveRecord::Base
  attr_accessible :link, :pubdate, :description, :title
  has_paper_trail
end
