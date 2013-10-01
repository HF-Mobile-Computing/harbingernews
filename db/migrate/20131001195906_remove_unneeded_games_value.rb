class RemoveUnneededGamesValue < ActiveRecord::Migration
  def change
    change_table :games do |t|
      t.remove :is_varsity_game
    end
   end
end
