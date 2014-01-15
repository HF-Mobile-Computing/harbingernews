class PrintIssue < ActiveRecord::Base
  attr_accessible :link, :pubdate, :description, :title
end
