class CreateMeetings < ActiveRecord::Migration
  def change
    create_table :meetings do |t|
      t.integer :club_id
      t.date :date
      t.string :info

      t.timestamps
    end
  end
end