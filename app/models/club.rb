class Club < ActiveRecord::Base
  attr_accessible :slug, :name, :category, :content, :photolink
  has_paper_trail
  
  has_many :favorites, :as => :favoritable
  has_many :users, :through => :favorites
  has_many :meetings,       :inverse_of => :club

  
  def to_param
    slug
  end

  before_create :set_slug
  
  def set_slug
    self.slug = self.name.gsub(/\s+/, "").downcase
  end
end
# == Schema Information
#
# Table name: clubs
#
#  id         :integer         not null, primary key
#  slug       :string(255)
#  name       :string(255)
#  category   :string(255)
#  content    :string(255)
#  created_at :datetime        not null
#  updated_at :datetime        not null
#

