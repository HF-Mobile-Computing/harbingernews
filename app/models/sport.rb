class Sport < ActiveRecord::Base
  attr_accessible :content, :photo_path, :season, :slug, :title
end
