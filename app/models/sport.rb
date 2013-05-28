class Sport < ActiveRecord::Base
  attr_accessible :content, :photo_path, :season, :slug, :title, :banner
  has_paper_trail
  
  has_attached_file :banner, 
    :styles => { :full => "852x170" }, 
    :default_url => "http://placehold.it/852x170"
  
  def to_param
    slug
  end
  
  has_many :games,       :inverse_of => :sport
  # Favorites
  has_many :favorites,   :as => :favoritable, :dependent => :destroy
  has_many :users,       :through => :favorites
  
  before_create :set_slug
  
  def set_slug
    self.slug = self.title.gsub(/\s+/, "").downcase
  end
  
end
# == Schema Information
#
# Table name: sports
#
#  id         :integer         not null, primary key
#  slug       :string(255)
#  title      :string(255)
#  content    :text
#  season     :string(255)
#  created_at :datetime        not null
#  updated_at :datetime        not null
#  alert      :text
#

