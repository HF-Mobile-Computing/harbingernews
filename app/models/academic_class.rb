class AcademicClass < ActiveRecord::Base
  attr_accessible :category, :content, :name, :slug
  def to_param
    slug
  end

  before_create :set_slug

  #accepts_nested_attributes_for :class_photos
  has_many :class_photos
  
  def set_slug
    self.slug = self.name.gsub(/\s+/, "").downcase
  end
end
