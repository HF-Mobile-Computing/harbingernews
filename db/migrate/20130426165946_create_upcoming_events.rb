class CreateUpcomingEvents < ActiveRecord::Migration
  def change
    create_table :upcoming_events do |t|
      t.string :content
      t.timestamps
    end
  end
end
