class RenameBooleanScrewOcd < ActiveRecord::Migration
  def change
  	change_table :buses do |t|
  		t.rename :inservice, :outofservice
  	end
  end
end
