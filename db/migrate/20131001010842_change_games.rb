class ChangeGames < ActiveRecord::Migration
  def change
    change_table :games do |t|
      t.change :time, :string 
    end
  end
end
