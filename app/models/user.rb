require 'rubygems'
require 'role_model'

class User < ActiveRecord::Base

  attr_accessible :email, :password, :password_confirmation, :remember_me, :name, :avatar, :roles, :roles_mask, :teacher

  # Include default devise modules. Others available are:
  # :token_authenticatable, :confirmable,
  # :lockable, :timeoutable and :omniauthable
  devise :database_authenticatable, :registerable,
         :recoverable, :rememberable, :trackable, :validatable
 
  has_paper_trail
  # Setup accessible (or protected) attributes for your model
  attr_accessible :email, :password, :password_confirmation, :remember_me, :name, :avatar, :roles, :roles_mask, :teacher, :bio, :birthday, :interests, :age
  # attr_accessible :title, :body
  has_attached_file :avatar,
    :styles => { :medium => '300x300>', :thumb => '100x100>', :header => '18x18>' }, 
    :default_url => '/images/:style/missing.png'
  
  # Favorites
  has_many :favorites
  has_many :sports,    :through => :favorites, :source => :favoritable, :source_type => "Sport"
  has_many :clubs,     :through => :favorites, :source => :favoritable, :source_type => "Club"
  
  include RoleModel
 
  # optionally set the integer attribute to store the roles in,
  # :roles_mask is the default
  roles_attribute :roles_mask
 
  # declare the valid roles -- do not change the order if you add more
  # roles later, always append them at the end!
  # The authorization system we are using uses something called a "bitmask" to store multiple roles.
  # As far as I know, it takes the position of the item in the list (Admin is 1) and "converts" it to a binary type form by adding a 0 for each space.
  # It then adds them together and stores them as an integer.
  roles :admin, :editor, :secretary
  # bin:   1       10       100      1000     10000    100000     Continues as # of roles grows
  # mask:  1        2        4         8       16        32
  # Therefore, Editor + Student would be 10, Secretary + teacher would be 36, etc.

  def roles_enum
      [ ["Admin", :admin], ["Editor", :editor], ["Secretary", :secretary] ]
  end
  
end
# == Schema Information
#
# Table name: users
#
#  id                     :integer         not null, primary key
#  email                  :string(255)     default(""), not null
#  encrypted_password     :string(255)     default(""), not null
#  name                   :string(255)
#  reset_password_token   :string(255)
#  reset_password_sent_at :datetime
#  remember_created_at    :datetime
#  sign_in_count          :integer         default(0)
#  current_sign_in_at     :datetime
#  last_sign_in_at        :datetime
#  current_sign_in_ip     :string(255)
#  last_sign_in_ip        :string(255)
#  created_at             :datetime        not null
#  updated_at             :datetime        not null
#  avatar_file_name       :string(255)
#  avatar_content_type    :string(255)
#  avatar_file_size       :integer
#  avatar_updated_at      :datetime
#

