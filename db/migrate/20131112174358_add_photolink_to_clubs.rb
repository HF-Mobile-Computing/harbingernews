class AddPhotolinkToClubs < ActiveRecord::Migration
  def change
    change_table :clubs do |t|
    	t.string :photolink
    end
  end
end
