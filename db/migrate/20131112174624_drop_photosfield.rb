class DropPhotosfield < ActiveRecord::Migration
  def change
    change_table :clubs do |t|
    	t.remove :photosfield
    end
  end
end
