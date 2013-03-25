class CreateSports < ActiveRecord::Migration
  def change
    create_table :sports do |t|
      t.string :slug
      t.string :title
      t.string :content
      t.string :season
      t.string :photo_path

      t.timestamps
    end
  end
end
