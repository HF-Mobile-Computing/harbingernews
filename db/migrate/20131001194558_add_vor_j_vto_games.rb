class AddVorJVtoGames < ActiveRecord::Migration
  def change
    change_table :games do |t|
      t.boolean :is_varsity_game
    end
  end
end
