class Article < ActiveRecord::Base
  attr_accessible :body, :title, :author, :description, :category
end
