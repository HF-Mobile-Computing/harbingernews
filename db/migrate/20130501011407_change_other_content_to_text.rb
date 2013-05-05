class ChangeOtherContentToText < ActiveRecord::Migration
  def up
  	change_table :clubs do |t|
      t.change :content, :text
    end
    
    change_table :recent_events do |t|
      t.change :content, :text
    end

    change_table :recent_events do |t|
      t.change :content, :text
    end
  end

  def down
  	change_table :clubs do |t|
      t.change :content, :text
    end
    
    change_table :recent_events do |t|
      t.change :content, :text
    end

    change_table :recent_events do |t|
      t.change :content, :text
    end
  end
end
