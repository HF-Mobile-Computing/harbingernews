class Favorite < ActiveRecord::Base
  
  attr_accessible :user_id, :favoritable_id, :favoritable_type
  
  belongs_to :favoritable, :polymorphic => true
  belongs_to :user
  
end
