class ChangeContentToText < ActiveRecord::Migration
  def up
    change_table :sports do |t|
      t.change :content, :text
    end
  end

  def down
    change_table :sports do |t|
      t.change :content, :string
    end
  end
end
