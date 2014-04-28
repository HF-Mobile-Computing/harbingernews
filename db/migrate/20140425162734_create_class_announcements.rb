class CreateClassAnnouncements < ActiveRecord::Migration
  def change
    create_table :class_announcements do |t|
      t.string :content

      t.timestamps
    end
  end
end
