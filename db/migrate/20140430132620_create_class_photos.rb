class CreateClassPhotos < ActiveRecord::Migration
  def change
    create_table :class_photos do |t|

      t.timestamps
    end
  end
end
