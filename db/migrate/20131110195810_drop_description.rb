class DropDescription < ActiveRecord::Migration
  def change
  	change_table :articles do |t|
  		t.remove :description
  	end
  end
end
