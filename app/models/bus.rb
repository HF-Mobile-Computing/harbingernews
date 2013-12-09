class Bus < ActiveRecord::Base
  attr_accessible :created_at, :one, :two, :three, :four, :five, :six, :seven, :eight, :nine, :ten, :eleven, :twelve, :thirteen, :fourteen, :fifteen, :sixteen, :seventeen, :eighteen, :nineteen, :twenty, :outofservice, :date
  has_paper_trail
end
# == Schema Information
#
# Table name: buses
#
#  id         :integer         not null, primary key
#  created_at :datetime        not null
#  updated_at :datetime        not null
#  date       :string(255)
#  one        :string(255)
#  two        :string(255)
#  three      :string(255)
#  four       :string(255)
#  five       :string(255)
#  six        :string(255)
#  seven      :string(255)
#  eight      :string(255)
#  nine       :string(255)
#  ten        :string(255)
#  eleven     :string(255)
#  twelve     :string(255)
#  thirteen   :string(255)
#  fourteen   :string(255)
#  fifteen    :string(255)
#  sixteen    :string(255)
#  seventeen  :string(255)
#  eighteen   :string(255)
#  nineteen   :string(255)
#  twenty     :string(255)
#

