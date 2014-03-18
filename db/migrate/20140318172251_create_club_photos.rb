class CreateClubPhotos < ActiveRecord::Migration
  def change
    create_table :club_photos do |t|

      t.timestamps
    end
  end
end
