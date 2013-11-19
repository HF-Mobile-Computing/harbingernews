class CreateDays < ActiveRecord::Migration
  def change
    create_table :days do |t|
    	t.string :day
    	t.timestamps
    end
  end
end
