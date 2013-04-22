class RemovePhotoPathFromSports < ActiveRecord::Migration
  def up
    remove_column :sports, :photo_path
  end

  def down
    add_column :sports, :photo_path
  end
end
