class Article < ActiveRecord::Base
  attr_accessible :body, :title, :author, :description, :category
  has_paper_trail
end
