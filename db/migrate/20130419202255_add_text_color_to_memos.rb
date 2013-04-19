class AddTextColorToMemos < ActiveRecord::Migration
  def change
    add_column :memos, :text_color, :string
  end
end
