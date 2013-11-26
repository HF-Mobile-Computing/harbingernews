class ChangeDayColumnInDays < ActiveRecord::Migration
	def change
	  change_table :days do |t|
	  	t.rename :day, :aorb
 	end
  end
end
