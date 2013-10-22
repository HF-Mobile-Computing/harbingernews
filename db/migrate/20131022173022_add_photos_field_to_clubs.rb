class AddPhotosFieldToClubs < ActiveRecord::Migration
  def change
  	change_table :clubs do |t|
      t.text :photosfield
     
    end
  end
end
