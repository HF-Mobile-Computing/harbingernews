class CreateAnnouncements < ActiveRecord::Migration
  def change
    create_table :announcements do |t|
      t.string :a_or_b
      t.text :content

      t.timestamps
    end
  end
end
