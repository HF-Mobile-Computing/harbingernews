class AddPhotoToClubPhotos < ActiveRecord::Migration
  def self.up
    add_attachment :club_photos, :photo
    add_column :club_photos, :club_id, :integer
  end

  def self.down
    remove_attachment :club_photos, :photo
    remove_column :club_photos, :club_id
  end
end
