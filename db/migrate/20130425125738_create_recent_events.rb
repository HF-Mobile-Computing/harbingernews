class CreateRecentEvents < ActiveRecord::Migration
  def change
    create_table :recent_events do |t|
      t.string :content
      
      t.timestamps
    end
  end
end
