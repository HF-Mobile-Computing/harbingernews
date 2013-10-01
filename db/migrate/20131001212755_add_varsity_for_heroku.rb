class AddVarsityForHeroku < ActiveRecord::Migration
  def change
    change_table :games do |t|
      t.boolean :is_varsity
    end
  end
end
