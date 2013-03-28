class RemoveLimitOnContent < ActiveRecord::Migration
  def up
    change_table :sports do |t|
      t.change :content, :text, :limit => nil
    end
  end

  def down
    change_table :sports do |t|
      t.change :content, :text, :limit => 225
    end
  end
end
