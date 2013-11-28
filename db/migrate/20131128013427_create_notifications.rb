class CreateNotifications < ActiveRecord::Migration
  def change
    create_table :notifications do |t|
    	t.string :content
    	t.timestamps
    end
  end
end
