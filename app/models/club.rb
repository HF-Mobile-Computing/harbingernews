class Club < ActiveRecord::Base
  attr_accessible :slug, :name, :category, :content
end
