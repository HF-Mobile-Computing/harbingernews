class CreateClubAnnouncements < ActiveRecord::Migration
  def change
    create_table :club_announcements do |t|
      t.text :content
      t.timestamps
    end
  end
end
