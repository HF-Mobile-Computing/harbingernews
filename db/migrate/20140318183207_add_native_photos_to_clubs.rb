class AddNativePhotosToClubs < ActiveRecord::Migration
  def change
  	change_table :clubs do |t|
  		t.boolean :native_photos
  	end
  end
end
