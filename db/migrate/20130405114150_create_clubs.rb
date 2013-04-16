class CreateClubs < ActiveRecord::Migration
  def change
    create_table :clubs do |t|
      t.string :slug
      t.string :name
      t.string :category
      t.string :content

      t.timestamps
    end
  end
end
