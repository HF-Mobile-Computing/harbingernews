class CreateMemos < ActiveRecord::Migration
  def change
    create_table :memos do |t|
      t.string :title
      t.string :content
      t.string :bg_color
      t.boolean :is_image
      t.string :image_path
      
      t.timestamps
    end
  end
end
