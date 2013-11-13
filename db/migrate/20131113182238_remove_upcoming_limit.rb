class RemoveUpcomingLimit < ActiveRecord::Migration
  def change
    change_table :upcoming_events do |t|
      t.change :content, :text, :limit => nil
    end
    change_table :recent_events do |t|
      t.change :content, :text, :limit => nil
    end
  end
end

