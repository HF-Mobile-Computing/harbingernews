class AddPhotolinkToSports < ActiveRecord::Migration
  def change
    change_table :sports do |t|
    	t.string :photolink
    end
  end
end
