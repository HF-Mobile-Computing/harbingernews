class CreateGames < ActiveRecord::Migration
  def change
    create_table :games do |t|
      t.integer :sport_id
      t.date :date
      t.time :time
      t.string :opponent
      t.boolean :is_home
      t.string :score
      t.string :status

      t.timestamps
    end
  end
end
