class AddBooleanToBusMap < ActiveRecord::Migration
  def change
  	change_table :buses do |t|
  		t.boolean :inservice
  	end
  end
end
