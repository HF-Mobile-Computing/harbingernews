class Article < ActiveRecord::Base
  attr_accessible :body, :title, :author, :description, :category, :image
  has_paper_trail
  has_attached_file :image, 
    :styles => { :full => "850x400" }, 
    :default_url => "http://placehold.it/850x400"
  
end
