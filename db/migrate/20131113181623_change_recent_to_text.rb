class ChangeRecentToText < ActiveRecord::Migration
  def change
    change_table :recent_events do |t|
      t.change :content, :text
    end
  end
end
