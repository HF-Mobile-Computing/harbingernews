class AcademicClass < ActiveRecord::Base
  attr_accessible :category, :content, :name, :slug
  def to_param
    slug
  end

  before_create :set_slug
  
  def set_slug
    self.slug = self.name.gsub(/\s+/, "").downcase
  end
end
