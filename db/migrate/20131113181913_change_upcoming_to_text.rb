class ChangeUpcomingToText < ActiveRecord::Migration
  def change
    change_table :upcoming_events do |t|
      t.change :content, :text, :limit => nil
    end
  end
end
